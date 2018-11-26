<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Http\Requests\EventRequest;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

class EventsController extends Controller
{
     public function __construct()
    {
       // $this->middleware('auth')->except(['index','show']);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::latest()->paginate(15);
        return view('events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EventRequest $request)
    {

        $filename = $this->eventImageName($request);

        $request->file('eventImage')->storeAs('/public/event-images', $filename);
            $large = storage_path().'/app/public/event-images/'.$filename;
            $small = storage_path().'/app/public/thumb-images/'.'thumb'.'-'.$filename;
            Image::make($large)->fit(1200, 800)->save($large)->fit(600, 400)->save($small);

        // $request->file('brandimage')->storeAs('/public/thumbimages', $filename);
        //return $request;
        Event::create([
            'user_id' => auth()->id(),
            'eventTitle' => request('eventTitle'),
            'eventDescription' => request('eventDescription'),
            'eventWebsite' => request('eventWebsite'),
            'eventPrice' => request('eventPrice'),
            'eventTicketUrl' => request('eventTicketUrl'),
            'eventStreetNumber' => request('eventStreetNumber'),
            'eventStreetAddress' => request('eventStreetAddress'),
            'eventCity' => request('eventCity'),
            'eventState' => request('eventState'),
            'eventZipcode' => request('eventZipcode'),
            'eventCountry' => request('eventCountry'),
            'eventLat' => request('eventLat'),
            'eventLong' => request('eventLong'),
            'slug' =>str_slug(request('eventTitle')),
            'eventImagePath' => 'event-images/' . $filename,
            'thumbImagePath' => 'thumb-images/'.'thumb'.'-'.$filename,
        ]);

        return redirect('/');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        return view('events.show', [
            'event' => $event,
            // 'reviews' => $brand->reviews()->latest()->get(),
            // 'coupons' => $brand->coupons()->latest()->get(),
            // 'randomBrands' => Brand::where('id', '!=', $brand->id)->inRandomOrder()->limit(3)->get(),
        ]);
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    { 
        Storage::delete('public/' . $event->eventImagePath);
        Storage::delete('public/' . $event->thumbImagePath);
        $event->delete();
        return redirect('/');
    }
    public function eventImageName($request)
    {
        $title = str_slug(request('eventTitle'));
        $extension = $request->file('eventImage')->getClientOriginalExtension();
        $fileNameToStore= $title.'.'.$extension;
        return $fileNameToStore;
    }

 public function search(Request $request, $radius = 20){
    $searchResult= $request->term;
    $latitude=$request->latitude;
    $longitude=$request->longitude;
    //return $request;
    $events = Event::select('events.*')
        ->selectRaw('( 3959 * acos( cos( radians(?) ) *
                           cos( radians( eventLat ) )
                           * cos( radians( eventLong ) - radians(?)
                           ) + sin( radians(?) ) *
                           sin( radians( eventLat ) ) )
                         ) AS distance', [$latitude, $longitude, $latitude])
        ->havingRaw("distance < ?", [$radius])
        ->get();

    return view('events.results', compact('events', 'searchResult'));

    }
}
