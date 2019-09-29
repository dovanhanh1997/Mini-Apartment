<?php

namespace App\Http\Controllers;

use App\Services\itf\RoomServiceInterface;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * @var RoomServiceInterface
     */
    private $roomService;

    public function __construct(RoomServiceInterface $roomService)
    {
        $this->roomService = $roomService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roomActive = $this->roomService->getActiveRoom();
        $roomInactive = $this->roomService->getInactiveRoom();

        return view('room.index', compact('roomActive',
            'roomInactive'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $room = $this->roomService->show($id);
        return view('room.detail',compact('room'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        dd($request->all());
        $this->roomService->update($request,$id);
        return redirect()->route('rooms.show',$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->roomService->delete($id);
        return redirect()->route('rooms.index');
    }

    public function addService(Request $request, $id)
    {
        $this->roomService->addService($id,$request->serviceId);
        return redirect()->route('rooms.show', $id);
    }

    public function detachService(Request $request,$id)
    {
        $this->roomService->detachService($id,$request);
        return redirect()->route('rooms.show',$id);
    }
}
