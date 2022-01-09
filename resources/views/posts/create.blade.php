@extends('layouts.app')
@section('title','Add New')
@section('content')


	<!--main area-->
	<main id="main" class="main-site left-sidebar">

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="/{{ LaravelLocalization::getCurrentLocale() }}" class="link">{{__('home')}}</a></li>
					<li class="item-link"><span>{{__('Add New Service')}}</span></li>
				</ul>
			</div>
			<div class="row">
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">							
					<div class=" main-content-area">
						<div class="wrap-login-item ">
							<div class="register-form form-item ">
								
									<form action="/p" enctype="multipart/form-data" class="form-stl" action="#" name="frm-login" method="post">
									@csrf
                                        <fieldset class="wrap-title">
										<h3 class="form-title">{{__('Create an Service')}}</h3>
										<h4 class="form-subtitle">{{__('Service Information')}}</h4>
									</fieldset>									
									<fieldset class="wrap-input">
										<label for="caption">{{__('Service Caption')}}</label>
										<input id="caption"id="frm-reg-lname" placeholder="{{__('Service Caption')}}*" type="text"
                                         class=" @error('caption') is-invalid @enderror" name="caption"
                                      value="{{ old('caption') }}" autocomplete="caption" autofocus>

                                         @error('caption')
                                      <span class="invalid-feedback" role="alert">
                                       <strong style="color : red">{{ $message }}</strong>
                                      </span>
                                         @enderror
										
									</fieldset>
									<fieldset class="wrap-input">
										<label for="short_discription">{{__('Service short discription')}}</label>
										<input id="short_discription"id="frm-reg-lname" placeholder="{{__('Service short discription')}}*" type="text"
                                         class=" @error('short_discription') is-invalid @enderror" name="short_discription"
                                      value="{{ old('short_discription') }}" autocomplete="short_discription" autofocus>

                                         @error('short_discription')
                                      <span class="invalid-feedback" role="alert">
                                       <strong style="color : red">{{ $message }}</strong>
                                      </span>
                                         @enderror
										
									</fieldset>
									<fieldset class="wrap-input">
										<label for="full_discription">{{__('Service full discription')}}</label>
										<input id="full_discription"id="frm-reg-lname" placeholder="{{__('Service short discription')}}*" type="text"
                                         class=" @error('full_discription') is-invalid @enderror" name="full_discription"
                                      value="{{ old('full_discription') }}" autocomplete="full_discription" autofocus>

                                         @error('full_discription')
                                      <span class="invalid-feedback" role="alert">
                                       <strong style="color : red">{{ $message }}</strong>
                                      </span>
                                         @enderror
										
									</fieldset>

									<fieldset class="wrap-title">
										<h3 class="form-title">{{__('Day and peice Information')}}</h3>
									</fieldset>
									<fieldset class="wrap-input item-width-in-half left-item ">
										<label for="day">{{__('Service day')}} *</label>
										<input type="text"  class=" @error('day') is-invalid @enderror" id="day" name="day" placeholder="{{__('Service day')}} "  value="{{ old('day') }}" autocomplete="day" autofocus>
										 @error('day')
                                      <span class="invalid-feedback" role="alert">
                                     <strong style="color : red">{{ $message }}</strong>
                                           </span>
                                             @enderror
									</fieldset>
									<fieldset class="wrap-input item-width-in-half ">
										<label for="price">{{__('Service price')}} *</label>
										<input type="text" class="@error('price') is-invalid @enderror" id="price" name="price" placeholder="{{__('Service price')}} *" value="{{ old('price') }}" autocomplete="day" autofocus>
										 @error('price')
                                    <span class="invalid-feedback" role="alert">
                                   <strong style="color : red">{{ $message }}</strong>
                                   </span>
                                     @enderror
									</fieldset>
                                    <fieldset class="wrap-title">
										<h3 class="form-title">{{__('Service Category')}}</h3>
									</fieldset>
                                    <div class="row">
                                        <div class="wrap-list-cate">
                                         <select id="category_id" name="category_id" class="list-cate"> 
											@foreach ($categoryes as $category)
											    <option id="Category_id" name="Category_id" value="{{$category ->category_id }}">
												    {{$category ->category_caption }}
											    </option>
                                            @endforeach
										 </select> 
                                        </div>
                                        @error('Category')
                                       <strong style="color : red">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                    <fieldset class="wrap-title">
										<h3 class="form-title">{{__('Service Image')}}</h3>
									</fieldset>
									<div class="row">
                                
                                  <input type="file" class="btn btn-sign" id="image" name="image">
                                  @error('image')
                                 <strong style="color : red">{{ $message }}</strong>
                                  @enderror
                                   </div>
									<input type="submit" class="btn btn-sign " value="{{'Add New Service'}}" name="{{'Add New Service'}}">
								</form>
							</div>											
						</div>
					</div><!--end main products area-->		
				</div>
			</div><!--end row-->

		</div><!--end container-->

	</main>
	<!--main area-->

	<!--footer area-->

@endsection
