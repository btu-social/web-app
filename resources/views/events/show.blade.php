<x-app-layout>
    <x-slot name="header">
        Anasayfa
    </x-slot>


<style>
    .display-comment .display-comment {
        margin-left: 40px
    }
</style>

            <div>
           
            
             

            <div class="sm:flex sm:flex-wrap">
            <a href="">
                <div
                    class="flex items-center bg-gray-50 px-2 py-3 border-1 border-gray-500 mt-5 hover:bg-gray-400 hover:text-blue:800">
                    <div class="flex flex-shrink-0">
                        
                    </div>
                    <div class="flex flex-grow overflow-hidden">
                        <span class="text-lg ml-3">
                            
                        </span>
                    </div>
                </div>
            </a>
        </div>
            <p>Etkinlik Adı: {{ $event->title }}</p>
            <p>Etkinlik Adresi: {{ $event->address }}</p>

            
            <p>Başlangıç Zamanı: {{date('Y-m-d', strtotime($event->start_date))}}</p>
            <p>Bitiş Zamanı: {{date('Y-m-d', strtotime($event->due_date))}}</p>
            
            <p>Etkinlik İçeriği: {{ $event->content}}</p>
            <p>Resim: <img src="{{ Storage::url($event->file) }}" height="75" width="75" alt="" /></p>


            @if($katilimDurumu)
                        <form action="/deleteUserActivities" method="post">
                        @csrf
                            <input type="hidden" id="user" name="user_id" value="{{ Auth::user()->id }}" required> 
                            <div class="form-group">
                            <input type="hidden" id="post" name="event_id" value="{{$event->id}}" required>
                        </div>
                        <button type="submit" class="btn btn-danger">Etkinlikten Ayrıl</button> 
                        </form>
                    @else
                    <form action="/userActivities" method="post">
                    @csrf
                        <input type="hidden" id="user" name="user_id" value="{{ Auth::user()->id }}" required>


                        <div class="form-group">
                            <input type="hidden" id="post" name="event_id" value="{{$event->id}}" required>
                        </div>
                        




                            <button type="submit" class="btn btn-primary">Etkinliğe Katıl</button>
                    @endif 
                    </form>


           


            
            

            <div class="card-body">
                <h5>Yorumlar</h5>
            
                @include('events.partials.replies', ['comments' => $event->comments, 'event_id' => $event->id])

                <hr />
               </div>

            <div class="card-body">
                <h5>Yorum Bırak</h5>
                <form method="post" action="{{ route('commentevent.add') }}">
                {{ csrf_field() }}
                    <div class="form-group">
                        <input type="text" name="comment" class="form-control" />
                        <input type="hidden" name="event_id" value="{{ $event->id }}" />
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-sm btn-outline-danger py-0" style="font-size: 0.8em;" value="Yorum Ekle" />
                    </div>
                </form>
               </div>


               <form action="event/{{$event->id}}" method="post" class="d-inline">
                                {{ csrf_field() }}
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Etkinliği Sil</button>
                            </form>



               

               

              
                
            
            
            
            

            


           
            
            </div>
            </div>

            </x-app-layout>
            
