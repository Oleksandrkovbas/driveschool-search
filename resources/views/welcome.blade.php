@extends('layouts.app')

@section('style')
    <style>
        .zip-input{
            width: 50%;
            margin: auto;
        }

        #searchBtn{
            cursor: pointer;
        }

        .description{
            display: none;
        }

        .priceTable{
            background-color: #e5dede;
            color: #000;
            border-radius: 5px;
            padding: 40px 10px 0px 10px;
            box-shadow: 0 2px 10px 0 rgba(0, 0, 0, 0.1);
            position: relative;
        }

        .title{
            text-align: center;
            position: absolute;
            top: -5px;           
            background-color: #6262c5;
            color: #fff;
            font-size: 14px;
            font-weight: 600;
            padding: 10px 0px;
            border-radius: 5px;
            width: 90%;
            box-shadow: 0 2px 10px 0 rgba(0, 0, 0, 0.1);
            height: 40px;
        }

        .priceItem{
            text-align: center;
            border-bottom: solid 1px #a78f8f;
            padding: 10px 0px 0px 0px;
            font-size: 15px;
            height: 40px;
        }

        .silver{
            background-color: #b4b4c5;
        }

        .gold{
            background-color: #cfca24;
        }

    </style>
@endsection



@section('content')
    <div class="container">
        <div class="zip-input">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Enter ZipCode" id="zipcode">
                <span class="input-group-text" id="searchBtn">Search</span>
            </div>            
        </div>

        <div class="mt-5">
            <div class="description row">

                <div class="col-2 priceTable">
                    <div class="title">
                        Pricing Table
                    </div>
                    <div class="priceItem">
                        School Name
                    </div>
                    <div class="priceItem">
                        Email
                    </div>
                    <div class="priceItem">
                        Phone Number
                    </div>
                    <div class="priceItem">
                        Website
                    </div>
                    <div class="priceItem">
                        ZipCode
                    </div>
                    <div class="priceItem">
                        Coop
                    </div>
                    <div class="priceItem">
                        License
                    </div>
                    <div class="priceItem">
                        Product
                    </div>
                    <div class="priceItem">
                        Books
                    </div>
                    <div class="priceItem">
                        Tests
                    </div>
                    <div class="priceItem">
                        OnSite
                    </div>
                    <div class="priceItem">
                        Online
                    </div>
                    <div class="priceItem">
                        Practical
                    </div>
                    <div class="priceItem">
                        Number Of Practical
                    </div>
                    <div class="priceItem">
                        Price
                    </div>
                    <div class="priceItem">
                        Extra Lesson
                    </div>
                    <div class="priceItem">
                        Last Update
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')  
     
    <script type="text/javascript"> 
       var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content'); 

        $(document).ready(function(){
            var numberRegex = /^\d+$/;  

            $('#searchBtn').click(function(){
                var zipcode = $('#zipcode').val();
                $('.appendCol').css('display', 'none');
                
                if(numberRegex.test(zipcode)){
                    if(zipcode.length != 5){
                       alert('Please check your zip-code. zip-code has 5 letters.');
                    }else{
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
                                        const valuesToMove = response.filter(item => item.coop == 'silver');
                                        const remainingValues = response.filter(item => item.coop !== 'silver');
                                        originalArray = valuesToMove.concat(remainingValues);                                        
                                    }                                    
                                    
                                    originalArray.forEach(displayTable);

                                    function displayTable(item){
                                        console.log(item);
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
                                        
                                        $('.description').append("<div class='col-2 priceTable appendCol'> <div class='title " + badgeClass +"'>" + badge +
                                            "</div> <div class='priceItem'>" + item.name +
                                            " </div> <div class='priceItem'>" + item.email +
                                            " </div> <div class='priceItem'>" + item.phone +
                                            " </div> <div class='priceItem'>" + item.website +
                                            " </div> <div class='priceItem'>" + item.zipcode +
                                            " </div> <div class='priceItem'>" + item.coop +
                                            " </div> <div class='priceItem'>" + item.license +
                                            " </div> <div class='priceItem'>" + item.product +
                                            " </div> <div class='priceItem'>" + item.books +
                                            " </div> <div class='priceItem'>" + item.tests +
                                            " </div> <div class='priceItem'>" + item.onsite +
                                            " </div> <div class='priceItem'>" + item.online +
                                            " </div> <div class='priceItem'>" + item.practical +
                                            " </div> <div class='priceItem'>" + item.numberOfPractical +
                                            " </div> <div class='priceItem'>" + item.price + "€" +
                                            " </div> <div class='priceItem'>" + item.extraLesson + "€" +
                                            " </div> <div class='priceItem'>" + formattedDate +
                                        "</div></div>")
                                    }
                                }else{
                                    // $('.description').css('display', 'none');
                                    alert('We do not have any driving school in that Zip Code, please check our preferred Partner in that province');
                                    $('.appendCol').css('display', 'none');
                                    

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