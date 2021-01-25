<?php
namespace App\Http\Controllers;

use App\Models\Seller;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

/**
 * Class SellersController.
 *
 * @package namespace App\Http\Controllers;
 */
class SellersController extends Controller
{

    public function __construct()
    {

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $sellers = Seller::all();

        return view('sellers.index', compact('sellers'));
    }

    public function create()
    {
        return view('sellers.create');
    }

    public function store(Request $request)
    {
        $attrs = $request->validate(Seller::rules());

        $seller = Seller::create($attrs);

        $response = [
            'message' => 'Seller created.',
            'data' => $seller->toArray(),
        ];

        return redirect()->back()->with('success', $response['message']);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $seller = Seller::find($id);

        return view('sellers.show', compact('seller'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $seller = Seller::find($id);

        return view('sellers.edit', compact('seller'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param string $id
     *
     * @return Response
     *
     */
    public function update(Request $request, $id)
    {
        $attrs = $request->validate(Seller::rules($id));
        Seller::whereId($id)->update($attrs);
        $seller = Seller::find($id);
        $response = [
            'message' => 'Seller updated.',
            'data' => $seller->toArray(),
        ];

        return redirect()->back()->with('success', $response['message']);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Seller::destroy($id);

        return redirect()->back()->with('success', 'Seller deleted.');
    }
}
