@extends('frontend.layout.master')
@section('title','Home')
@section('home')
    <!-- home section starts  -->
    <div class="home">

        <section class="center">

            <form action="" method="post">
                @csrf
                <h3>find your perfect home</h3>
                <div class="box">
                    <p>enter location <span>*</span></p>
                    <input type="text" name="location" required maxlength="50" placeholder="enter ciyt name" class="input">
                </div>
                <div class="flex">
                    <div class="box">
                        <p>property type <span>*</span></p>
                        <select name="type" class="input" required>
                            <option value="flat">flat</option>
                            <option value="house">house</option>
                            <option value="shop">shop</option>
                        </select>
                    </div>
                    <div class="box">
                        <p>how many BHK <span>*</span></p>
                        <select name="bhk" class="input" required>
                            <option value="1">1 BHK</option>
                            <option value="2">2 BHK</option>
                            <option value="3">3 BHK</option>
                            <option value="4">4 BHK</option>
                            <option value="5">5 BHK</option>
                            <option value="6">6 BHK</option>
                            <option value="7">7 BHK</option>
                            <option value="8">8 BHK</option>
                            <option value="9">9 BHK</option>
                        </select>
                    </div>
                    <div class="box">
                        <p>maximum budget <span>*</span></p>
                        <select name="minimum" class="input" required>
                            <option value="5000000">5 lac</option>
                            <option value="1000000">10 lac</option>
                            <option value="2000000">20 lac</option>
                            <option value="3000000">30 lac</option>
                            <option value="4000000">40 lac</option>
                            <option value="4000000">40 lac</option>
                            <option value="5000000">50 lac</option>
                            <option value="6000000">60 lac</option>
                            <option value="7000000">70 lac</option>
                            <option value="8000000">80 lac</option>
                            <option value="9000000">90 lac</option>
                            <option value="10000000">1 Cr</option>
                            <option value="20000000">2 Cr</option>
                            <option value="30000000">3 Cr</option>
                            <option value="40000000">4 Cr</option>
                            <option value="50000000">5 Cr</option>
                            <option value="60000000">6 Cr</option>
                            <option value="70000000">7 Cr</option>
                            <option value="80000000">8 Cr</option>
                            <option value="90000000">9 Cr</option>
                            <option value="100000000">10 Cr</option>
                            <option value="150000000">15 Cr</option>
                            <option value="200000000">20 Cr</option>
                        </select>
                    </div>
                    <div class="box">
                        <p>maximum budget <span>*</span></p>
                        <select name="maximum" class="input" required>
                            <option value="5000000">5 lac</option>
                            <option value="1000000">10 lac</option>
                            <option value="2000000">20 lac</option>
                            <option value="3000000">30 lac</option>
                            <option value="4000000">40 lac</option>
                            <option value="4000000">40 lac</option>
                            <option value="5000000">50 lac</option>
                            <option value="6000000">60 lac</option>
                            <option value="7000000">70 lac</option>
                            <option value="8000000">80 lac</option>
                            <option value="9000000">90 lac</option>
                            <option value="10000000">1 Cr</option>
                            <option value="20000000">2 Cr</option>
                            <option value="30000000">3 Cr</option>
                            <option value="40000000">4 Cr</option>
                            <option value="50000000">5 Cr</option>
                            <option value="60000000">6 Cr</option>
                            <option value="70000000">7 Cr</option>
                            <option value="80000000">8 Cr</option>
                            <option value="90000000">9 Cr</option>
                            <option value="100000000">10 Cr</option>
                            <option value="150000000">15 Cr</option>
                            <option value="200000000">20 Cr</option>
                        </select>
                    </div>
                </div>
                <input type="submit" value="search property" name="search" class="btn">
            </form>

        </section>

    </div>
    <!-- home section ends -->
@endsection

@section('services')
    <!-- services section starts  -->

    <section class="services">

        <h1 class="heading">our services</h1>

        <div class="box-container">

            <div class="box">
                <img src="{{\Illuminate\Support\Facades\URL::asset('assets/images/icon-1.png')}}" alt="">
                <h3>buy house</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque, incidunt.</p>
            </div>

            <div class="box">
                <img src="{{\Illuminate\Support\Facades\URL::asset('assets/images/icon-2.png')}}" alt="">
                <h3>rent house</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque, incidunt.</p>
            </div>

            <div class="box">
                <img src="{{\Illuminate\Support\Facades\URL::asset('assets/images/icon-3.png')}}" alt="">
                <h3>sell house</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque, incidunt.</p>
            </div>

            <div class="box">
                <img src="{{\Illuminate\Support\Facades\URL::asset('assets/images/icon-4.png')}}" alt="">
                <h3>flats and buildings</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque, incidunt.</p>
            </div>

            <div class="box">
                <img src="{{\Illuminate\Support\Facades\URL::asset('assets/images/icon-5.png')}}" alt="">
                <h3>shops and malls</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque, incidunt.</p>
            </div>

            <div class="box">
                <img src="{{\Illuminate\Support\Facades\URL::asset('assets/images/icon-6.png')}}" alt="">
                <h3>24/7 service</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque, incidunt.</p>
            </div>

        </div>

    </section>

    <!-- services section ends -->
@endsection

@section('latestListings')
    <!-- listings section starts  -->

    <section class="listings">

        <h1 class="heading">latest listings</h1>

        <div class="box-container">

            @if ($properties != [])
                @foreach ($properties as $property)


                    @if(!empty($property->image_02))
                            <?php $image_coutn_02 = 1?>
                    @else
                            <?php $image_coutn_02 = 0?>
                    @endif
                    @if(!empty($property->image_03))
                            <?php $image_coutn_03 = 1?>
                    @else
                            <?php $image_coutn_03 = 0?>
                    @endif
                    @if(!empty($property->image_04))
                            <?php $image_coutn_04 = 1?>
                    @else
                            <?php $image_coutn_04 = 0?>
                    @endif
                    @if(!empty($property->image_05))
                            <?php $image_coutn_05 = 1?>
                    @else
                            <?php $image_coutn_05 = 0?>
                    @endif

                        <?php $total_images = (1 + $image_coutn_02 + $image_coutn_03 + $image_coutn_04 + $image_coutn_05);?>


                    <form action="" method="POST">
                        <div class="box">
                            <input type="hidden" name="property_id" value="{{$property->id}}">

                            <button type="submit" name="save" class="save"><i class="fas fa-heart"></i><span>saved</span></button>

                            <button type="submit" name="save" class="save"><i class="far fa-heart"></i><span>save</span></button>

                            <div class="thumb">
                                <p class="total-images"><i class="far fa-image"></i><span><?= $total_images; ?></span></p>

                                <img src="attachments/{{$property->user_id}}/{{$property->id}}/{{$property->image_01}}" alt="">
                            </div>
                            <div class="admin">
                                <h3><?= substr($property->user_name, 0, 1); ?></h3>
                                <div>
                                    <p>{{$property->user_name}}</p>
                                    <span>{{$property->created_at}}</span>
                                </div>
                            </div>
                        </div>
                        <div class="box">
                            <div class="price"><i class="fas fa-indian-rupee-sign"></i><span>{{$property->price}}</span></div>
                            <h3 class="name">{{$property->property_name}}</h3>
                            <p class="location"><i class="fas fa-map-marker-alt"></i><span>{{$property->address}}</span></p>
                            <div class="flex">
                                <p><i class="fas fa-house"></i><span>{{$property->type}}</span></p>
                                <p><i class="fas fa-tag"></i><span>{{$property->offer}}</span></p>
                                <p><i class="fas fa-bed"></i><span>{{$property->bnk}}</span></p>
                                <p><i class="fas fa-trowel"></i><span>{{$property->status}}</span></p>
                                <p><i class="fas fa-couch"></i><span>{{$property->furnished}}</span></p>
                                <p><i class="fas fa-maximize"></i><span>{{$property->carpet}}sqft</span></p>
                            </div>
                            <div class="flex-btn">
                                <a href="{{route('view_property',$property->id)}}" class="btn">view property</a>
                                <input type="submit" value="send enquiry" name="send" class="btn">
                            </div>
                        </div>
                    </form>

                @endforeach
            @else
                <p class="empty">no properties added yet! <a href="{{route('property')}}" style="margin-top:1.5rem;" class="btn">add new</a></p>
            @endif
        </div>

        <div style="margin-top: 2rem; text-align:center;">
            <a href="{{route('all listings')}}" class="inline-btn">view all</a>
        </div>


    </section>

    <!-- listings section ends -->

@endsection









