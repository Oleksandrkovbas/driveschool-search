@extends('layouts.app')

@section('style')
    <style>
        

        #searchBtn{
            cursor: pointer;
        }

        .description{
            /* display: none; */
            width: fit-content;
            margin: auto;
            display: flex;
        }

        .priceTable{
            background-color: #e5dede;
            color: #000;
            border-radius: 5px;
            padding: 0px 0px 0px 0px;
            box-shadow: 0 2px 10px 0 rgba(0, 0, 0, 0.1);
            position: relative;
            width: 190px;
        }

        .appendCol{
            width: 180px !important;
        }

        .title{
            text-align: center;               
            /* background-color: #6262c5;
            color: #fff; */
            font-size: 19px;
            font-weight: 600;
            padding: 10px 0px;
            box-shadow: 0 2px 10px 0 rgba(0, 0, 0, 0.1);     
            height: 90px;   
            padding: 10px 0;   
        }

        .first_title{
            padding-top: 30px;
            font-size: 24px;
        }

        .divider{
            background-color: #004a98;
            color: #fff;
            padding: 10px 10px;
            height: 45px;
        }

        .priceItem{
            text-align: center;
            border-bottom: solid 1px #a78f8f;
            padding: 10px 0px 0px 0px;
            font-size: 15px;
            height: 58px;
            line-height: 23px;
            word-wrap: break-word;
        }

        .priceItem i{
            font-size: 20px;
            color: #ff0000;
        }

        .silver{
            background-color: #b4b4c5;
        }

        .gold{
            background-color: #cfca24;
        }

        .appendCol{
            background-color: #fff;
        }

        .price{
            color: #ff778f;
        }

        .acive-icon{
            color: #73ad1d !important;
        }

        .badge-img img{
           width: 55px;
           position: absolute;
            top: -35px;
            left: 80px;
        }      

    </style>
@endsection



@section('content')
 
    <section class = 'pricingTable-section'>
        <div class="container">
            <div class="mt-5">
                <div class="description">

                    <div class="mt-5 priceTable">
                        <div class="title first_title">
                            Autoescuela
                        </div>
                        <div class="divider">
                            Datos básicos
                        </div>
                        <div class="priceItem">
                            Teléfono
                        </div>
                        <div class="priceItem">
                            Web
                        </div>
                        <div class="divider">
                            Servicios
                        </div>
                        <div class="priceItem">
                            Libros 
                        </div>
                        <div class="priceItem">
                            Tests  
                        </div>
                        <div class="priceItem">
                            Teóricas Presenciales
                        </div>
                        <div class="priceItem">
                            Teóricas Online
                        </div>
                        <div class="priceItem">
                            Nº Prácticas
                        </div>
                        <div class="priceItem">
                            Precio 
                        </div>
                        <div class="priceItem">
                            Clase extra
                        </div>                       
                    </div>
                    @if(count($schools) > 1)
                        @foreach($schools as $school)
                            @php
                                if($school->coop == 'silver'){
                                    $badgeClass = 'badge-img';
                                    $badgeImg = "<img src= {{ asset('public/img/favorite.png') }} />";
                                }
                                else{
                                    $badgeClass = '';
                                    $badgeImg = '';
                                }

                                if($school->books == 'Yes'){
                                    $booksIcon = "<i class='fa-regular fa-circle-check acive-icon'></i>";
                                }else{
                                    $booksIcon = "<i class='fa-regular fa-circle-xmark'></i>";
                                }

                                if($school->tests == 'Yes'){
                                    $testsIcon = "<i class='fa-regular fa-circle-check acive-icon'></i>";
                                }else{
                                    $testsIcon = "<i class='fa-regular fa-circle-xmark'></i>";
                                }

                                if($school->online == 'Yes'){
                                    $onlineIcon = "<i class='fa-regular fa-circle-check acive-icon'></i>";
                                }else{
                                    $onlineIcon = "<i class='fa-regular fa-circle-xmark'></i>";
                                }

                                if($school->onsite == 'Yes'){
                                    $onsiteIcon = "<i class='fa-regular fa-circle-check acive-icon'></i>";
                                }else{
                                    $onsiteIcon = "<i class='fa-regular fa-circle-xmark'></i>";
                                }

                                if(($school->website == '') || ($school->website == 'null')){
                                  $url = "https://www.google.es/search?q=autoescuela+7+coronas+autoescuela+". $zipcode;
                                }else{
                                    $url = $school->website;
                                }                               

                            @endphp
                                
                            <div class="mt-5 priceTable appendCol">
                                <div class="title">
                                    <div class = "{{ $badgeClass }}">
                                        @if($school->coop == 'silver')
                                            <img src= {{ asset('public/img/favorite.png') }} />
                                        @endif
                                       
                                    </div>        
                                    <div class="priceName">
                                        {{ $school->name }}
                                    </div>
                                    <div class="price">
                                        {{ $school->price }} €
                                    </div>
                                </div>
                                <div class="divider"></div>
                                <div class="priceItem">
                                    {{ $school->phone }}
                                </div>
                                <div class="priceItem">
                                    <a href="{{ $url }}" target="_blank">
                                        <button class="btn btn-primary">
                                            Contacta
                                        </button>
                                    </a>
                                </div>
                                <div class="divider"></div>
                                <div class="priceItem">
                                    {!! $booksIcon !!}
                                </div>
                                <div class="priceItem">
                                    {!! $testsIcon !!}
                                </div>
                                <div class="priceItem">
                                    {!! $onsiteIcon !!}
                                </div>
                                <div class="priceItem">
                                    {!! $onlineIcon !!}
                                </div>
                                <div class="priceItem">
                                    {{ $school->numberOfPractical }}
                                </div>
                                <div class="priceItem">
                                    {{ $school->price }} €
                                </div>
                                <div class="priceItem">
                                    {{ $school->extraLesson}} €
                                </div>
                                
                            </div>
                        @endforeach
                    @else

                    @endif
                </div>
            </div>
        </div>
    </section>


@endsection

@section('script')  
     
    <script type="text/javascript"> 
       var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content'); 

        $(document).ready(function(){
            var numberRegex = /^\d+$/;  

            $('#searchBtn').click(function(){
                var zipcode = $('#zipcode').val();
                $('.appendCol').css('display', 'none');

                $('.search-zipCode').text(zipcode);

                if(numberRegex.test(zipcode)){
                    if(zipcode.length != 5){
                       alert('Please check your zip-code. zip-code has 5 letters.');
                    }else{
                        console.log(zipcode);
                        var url = "{{ route('getShools.show', ":slug") }}";
                        url = url.replace(':slug', zipcode);
                        window.location.href=url;                        

                        $.ajax({
                            url: "{{ route('getShools') }}",
                            type: 'post',
                            data: {_token: CSRF_TOKEN, zipcode: zipcode},
                            dataType: 'json',
                            success: function(response){
                                if(response.length > 0){
                                    $('.description').css('display', 'flex');

                                    var originalArray = response;
                                    originalArray.forEach(orderArray);

                                    function orderArray(item){
                                        if(item.coop == 'silver'){
                                            const valuesToMove = response.filter(item => item.coop == 'silver');
                                            const remainingValues = response.filter(item => item.coop !== 'silver');
                                            originalArray = valuesToMove.concat(remainingValues);        
                                        }else if(item.coop == 'gold'){
                                            const valuesToMove = response.filter(item => item.coop == 'gold');
                                            const remainingValues = response.filter(item => item.coop !== 'gold');
                                            originalArray = valuesToMove.concat(remainingValues);   
                                        }                                                                       
                                    }                                    
                                    
                                    originalArray.forEach(displayTable);

                                    function displayTable(item){                                      
                                        var badgeClass = '';
                                        var badge = '';
                                        if(item.coop == 'silver'){
                                            badge = 'Prefered Offer'
                                            badgeClass = 'silver';
                                        }else if(item.coop == 'gold'){
                                            badge = 'Gold Badge';
                                            badgeClass = 'gold';
                                        }else{
                                            badge = '';
                                            badgeClass = '';
                                        }

                                        const formattedDate = (item.updated_at).replace("T", " ").replace(".000000Z", "");
                                        
                                        $('.description').append("<div class='mt-5 priceTable appendCol'> <div class='title'><div class='"+
                                                (item.coop == 'silver'?"badge-img":"")+"'>" + 
                                                (item.coop == 'silver'?"<img src= {{ asset('public/img/favorite.png') }} />":"")+
                                                
                                                "</div><div class='priceName'>" + item.name +
                                                "</div><div class='price'>" + item.price + "€"+
                                                "</div></div><div class='divider'>"+
                                                "</div><div class='priceItem'>" + item.phone +                                                       
                                                " </div> <div class='priceItem'><a href = '" + (item.website ) + "'> <button class ='btn btn-danger'> Contacta </button></a>"+
                                                "</div><div class='divider'>" +                                                      
                                                " </div> <div class='priceItem'>" + (item.books == 'Yes'?"<i class='fa-regular fa-circle-check acive-icon'></i>":"<i class='fa-regular fa-circle-xmark'></i>") +
                                                " </div> <div class='priceItem'>" + (item.tests == 'Yes'?"<i class='fa-regular fa-circle-check acive-icon'></i>":"<i class='fa-regular fa-circle-xmark'></i>") +
                                                " </div> <div class='priceItem'>" + (item.onsite == 'Yes'?"<i class='fa-regular fa-circle-check acive-icon'></i>":"<i class='fa-regular fa-circle-xmark'></i>") +
                                                " </div> <div class='priceItem'>" + (item.online == 'Yes'?"<i class='fa-regular fa-circle-check acive-icon'></i>":"<i class='fa-regular fa-circle-xmark'></i>") +
                                                " </div> <div class='priceItem'>" + item.numberOfPractical +
                                                " </div> <div class='priceItem'>" + item.price + "€" +
                                                " </div> <div class='priceItem'>" + item.extraLesson + "€" +
                                                "</div></div>"
                                            );
                                    }
                                }else{
                                    // $('.description').css('display', 'none');
                                    alert('We do not have any driving school in that Zip Code, please check our preferred Partner in that province');
                                    $('.appendCol').css('display', 'none');
                                    $.ajax({
                                        url: "{{ route('getShools') }}",
                                        type: 'post',
                                        data: {_token: CSRF_TOKEN, coop: 'gold'},
                                        dataType: 'json',
                                        success: function(response){
                                            if(response.length > 0){
                                                $('.description').css('display', 'flex');
                                                var originalArray = response;
                                                originalArray.forEach(displayTable);

                                                function displayTable(item){                                      
                                                    var badgeClass = '';
                                                    var badge = '';
                                                    if(item.coop == 'silver'){
                                                        badge = 'Prefered Offer'
                                                        badgeClass = 'silver';
                                                    }else if(item.coop == 'gold'){
                                                        badge = 'Gold Badge';
                                                        badgeClass = 'gold';
                                                    }else{
                                                        badge = '';
                                                        badgeClass = '';
                                                    }

                                                    const formattedDate = (item.updated_at).replace("T", " ").replace(".000000Z", "");
                                                    
                                                    $('.description').append("<div class='mt-5 priceTable appendCol'> <div class='title'><div class='"+
                                                        (item.coop == 'silver'?"badge-img":"")+"'>" + 
                                                        (item.coop == 'silver'?"<img src= {{ asset('public/img/favorite.png') }} />":"")+
                                                        "</div><div class='priceName'>" + item.name +
                                                        "</div> <div class='price'>" + item.price + "€"+
                                                        "</div> </div> <div class='divider'>"+
                                                        "</div> <div class='priceItem'>" + item.phone +                                                       
                                                        " </div> <div class='priceItem'><a href = '" + (item.website ) + "'><button class = 'btn btn-danger'>Contacta </button></a>"+
                                                        "</div> <div class='divider'>" +                                                      
                                                        " </div> <div class='priceItem'>" + (item.books == 'Yes'?"<i class='fa-regular fa-circle-check acive-icon'></i>":"<i class='fa-regular fa-circle-xmark'></i>") +
                                                        " </div> <div class='priceItem'>" + (item.tests == 'Yes'?"<i class='fa-regular fa-circle-check acive-icon'></i>":"<i class='fa-regular fa-circle-xmark'></i>") +
                                                        " </div> <div class='priceItem'>" + (item.onsite == 'Yes'?"<i class='fa-regular fa-circle-check acive-icon'></i>":"<i class='fa-regular fa-circle-xmark'></i>") +
                                                        " </div> <div class='priceItem'>" + (item.online == 'Yes'?"<i class='fa-regular fa-circle-check acive-icon'></i>":"<i class='fa-regular fa-circle-xmark'></i>") +
                                                        " </div> <div class='priceItem'>" + item.numberOfPractical +
                                                        " </div> <div class='priceItem'>" + item.price + "€" +
                                                        " </div> <div class='priceItem'>" + item.extraLesson + "€" +
                                                    "</div></div>");
                                                }
                                                
                                            }
                                        }
                                    })

                                    console.log('no data');
                                }

                            }
                        })
                    }
                }else{
                    alert('Zip code must number');
                }
            })
        })
    </script>
@endsection