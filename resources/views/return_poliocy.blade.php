@extends('layouts.app')

@section('content')
<main id="main" class="main-site">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="/{{ LaravelLocalization::getCurrentLocale() }}/" class="link">home</a></li>
                <li class="item-link"><span>Terms & Conditions</span></li>
            </ul>
        </div>
    </div>
    
    <div class="container pb-60">
        <div class="row">
            <div class="col-md-12">
    
             <h1>  2. Why is there a watermark on my delivery?</h1>


<p>When a seller delivers your order, you will see a watermark on the image preview. After you have accepted your delivery, you will be able to download the original image without the watermark. This is in place to protect the seller's work.</p>

<h1> 3. What if a Seller has activated the Set Availability feature?</h1>
<p>
Did you find someone who you would love working with, but see that they are currently unavailable? 

Within a seller's Profile page and seller's Gig page, you can see the seller's return date and can send the seller a message by clicking the Contact button.                                                          

Note: This option is only available if a seller chooses to allow it. 

Be notified when the seller's time off is scheduled to be over and you will receive an email on the seller’s return. 
</p>
<h1>  4. What is the difference between the App and the site?</h1>
<p>The SSA Developer Mobile App enables customers to browse all the Gigs offered on SSA Developer.com. Customers can communicate with each other through the App on the go to help create and manage orders. Future updates will include more features that are exclusive to the full site.</p>
<h1>5. Does SSA Developer contact its customers? </h1>
<p>From time to time, we reach out to the SSA Developer community. If you receive a message from an official SSA Developer Team member, it will have a button labeled SSA Developer Team next to the username. The list of official SSA Developer usernames that are used to contact our community:</p>

                
            </div>
        </div>
    </div><!--end container-->

</main>


@endsection