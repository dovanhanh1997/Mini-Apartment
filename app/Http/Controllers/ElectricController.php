<?php

namespace App\Http\Controllers;

use App\Http\Requests\ElectricUpdateRequest;
use App\Services\itf\ElectricServiceInterface;
use App\Services\itf\HistoryServiceInterface;
use App\Services\itf\SerServiceInterface;
use Illuminate\Http\Request;

class ElectricController extends Controller
{
    /**
     * @var ElectricServiceInterface
     */
    private $electricService;
    /**
     * @var HistoryServiceInterface
     */
    private $historyService;
    /**
     * @var SerServiceInterface
     */
    private $serService;

    public function __construct(ElectricServiceInterface $electricService,
                                HistoryServiceInterface $historyService,
                                SerServiceInterface $serService)
    {
        $this->electricService = $electricService;
        $this->historyService = $historyService;
        $this->serService = $serService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $electricActives = $this->electricService->getElectricActive();
        $electricInactives = $this->electricService->getElectricInactive();
        return view('electric.index', compact('electricActives','electricInactives'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('electric.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->electricService->create($request);
        return redirect()->route('electrics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($roomNumber)
    {
        $electric = $this->electricService->findByRoomNumber($roomNumber);
        $service =$this->serService->findById($electric->service_id);
        $electricHistories = $service->histories;
        return view('electric.detail', compact('electric','electricHistories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $electric = $this->electricService->findById($id);
        return view('electric.update' ,compact('electric'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(ElectricUpdateRequest $request, $id)
    {
        $electric = $this->electricService->findById($id);
        $this->historyService->createElectricHistory($electric);
        $this->electricService->update($request,$id);
        return redirect()->route('electrics.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->electricService->delete($id);
        return redirect()->route('electrics.index');
    }
}
