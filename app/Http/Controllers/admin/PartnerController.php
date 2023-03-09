<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Partners;

class PartnerController extends Controller
{
    public function adminPartners()
    {
        $partners = Partners::all();
        return view('admin.partners', compact('partners'));
    }
    public function addPartner()
    {
        return view('admin.add_partner');
    }
    public function partnerSingle($id)
    {
        $partners = Partners::where('id', $id)->first();
        return view('admin.partner_single', compact('partners'));
    }
    public function createPartner(Request $request)
    {
        $partners = new Partners([
            "partner_name" =>$request->partner_name,
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
            
        ]);
        $file = $request->image;
        $filename = time().'.'.$file->getClientOriginalExtension();
        $request->image->move('assets/img/partners', $filename);
        $partners->partner_name = $request->partner_name;
        $partners->image = $filename;
        $partners->save();

        alert()->success('Thank You', 'Your partner saved successfully');
        
        return redirect('/admin/partners');
    }
    public function editPartner($id)
    {
        $partner = Partners::where('id', $id)->first();
        return view('admin.edit_partner', compact('partner'));
    }
    public function update($id,Request $request)
    {
        
        $partners = Partners::find($id);
        $file = $request->image;
        $filename = time().'.'.$file->getClientOriginalExtension();
        $request->image->move('assets/img/partners', $filename);
        $partners->partner_name = $request->partner_name;
        $partners->image = $filename;
        $partners->save();

        alert()->success('Thanks', 'partners updated successfully');

        return redirect('/admin/partners');
    }

    public function destroy(Partners $partner)
    {
        $partner->delete();
        alert()->success('Thanks','partners deleted successfully!');

        return redirect('/admin/partners');
    }
}
