<div class="main--sidebar col-md-4 pb--60" data-trigger="stickyScroll">
    <!-- Widget Start -->
    <div class="widget">
        <!-- Search Widget Start -->
        <div class="search--widget" data-form="validate">
            <form action="#">
                <input type="text" name="search" placeholder="Search" class="form-control" required>

                <button type="submit" class="btn-link"><i class="fa fa-search"></i></button>
            </form>
        </div>
        <!-- Search Widget End -->
    </div>
    <!-- Widget End -->

    <!-- Widget Start -->
    <div class="widget">
        <h2 class="h4 fw--700 widget--title">Catagories</h2>

        <!-- Links Widget Start -->
        <div class="links--widget">
            <ul class="nav">
            @if (isset($types))                
                @if(count($types)>0)
                    @foreach($types as $value)
                    <li><a href="{{url('tissues/specimenType/'.$value->myspecimen)}}">{{$value->myspecimen}}</a></li>
                    @endforeach
                @endif    
              @endif
              @if (isset($organtypes))                
              @if(count($organtypes)>0)
                  @foreach($organtypes as $value)
                  <li><a href="{{url('organs/specimenType/'.$value->myspecimen)}}">{{$value->myspecimen}}</a></li>
                  @endforeach
              @endif    
            @endif
            </ul>
        </div>
        <!-- Links Widget End -->
    </div>
    <!-- Widget End -->

    <!-- Widget Start -->
    <div class="widget">
        <h2 class="h4 fw--700 widget--title">My Request List <span class="badge">{{ Session::get('items') }}</span></h2>

        <!-- Cart Widget Start -->
        <div class="cart--widget">
            <ul class="nav">
                @forelse ( Session::get('itemcollections') as $value)
                <li class="clearfix">
                    <div class="img mr--10 float--left">
                        <a href="#"><img src="img/widgets-img/cart-widget/01.jpg" alt=""></a>
                    </div>

                    <div class="info fs--12 ov--h">
                        <h4 class="h4 fs--14 fw--500 text-darkest">
                            <a href="#"> <strong>Type:</strong>{{$value->item}}, <strong>Gender:</strong> {{ $value->gender}},
                                <strong>Age:</strong> {{ $value->age}},
                                <strong>Ethinicity:</strong> {{ $value->ethinicity}},
                                <strong>Donor Status:</strong> {{ $value->donor_status}}</a>
                        </h4>

                        <p class="mt--4">Project: {{$value->project_acronym}}</p>
                    </div>

                    <a href="#" class="remove"></a>
                </li>               
                @empty
                <li class="clearfix">
                    <div class="img mr--10 float--left">
                        <a href="#"><img src="img/widgets-img/cart-widget/01.jpg" alt=""></a>
                    </div>

                    <div class="info fs--12 ov--h">
                        <h4 class="h4 fs--14 fw--500 text-darkest">
                            <a href="#">Cart Empty</a>
                        </h4>

                        <p class="mt--4">You can Browse through our catalog of Tissues, Biospecimens and Organs</p>
                    </div>

                    <a href="#" class="remove"></a>
                </li>
                @endforelse
                @if (Session::get('items') > 0)
                <li><a class="text-center" href="{{url('cart')}}" title="View all {{ Session::get('items') }}" data-toggle="tooltip" data-placement="bottom">View All {{ Session::get('items') }}</a></li>
                @endif
                
            </ul>
            
        </div>
        <!-- Cart Widget End -->
    </div>
    <!-- Widget End -->


</div>
