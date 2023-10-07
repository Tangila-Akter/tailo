
@extends('backend.layouts.master')

@section('title')
Order Create - Admin Panel
@endsection

@section('styles')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

<style>
    .form-check-label {
        text-transform: capitalize;
    }
</style>
@endsection


@section('admin-content')

<!-- page title area start -->
<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">Order Create</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li><a href="{{ route('admin.order.index') }}">All Order</a></li>
                    <li><span>Create Ful</span></li>
                </ul>
            </div>
        </div>
        <div class="col-sm-6 clearfix">
            @include('backend.layouts.partials.logout')
        </div>
    </div>
</div>
<!-- page title area end -->

<div class="main-content-inner">
    <div class="row">
        <!-- data table start -->
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Create New Order</h4>
                    @include('backend.layouts.partials.messages')


                    <form action="{{ route('admin.order.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Order no</label>
                                    <input type="number" name="order_no" class="form-control"  >
                                  </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" name="name" class="form-control" >
                                  </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Phone</label>
                                    <input type="phone" name="phone" minlength="11" class="form-control" >
                                  </div>
                            </div>
                            <div class="col-12 col-sm-6">
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Email</label>
                                  <input type="email" name="email"  class="form-control" >
                                </div>
                          </div>
                            
                        </div>
                        <div class="col-12 col-sm-6">
                          <div class="form-group">
                              <label for="exampleFormControlTextarea1">Address</label>
                              <textarea class="form-control" name="address" id="exampleFormControlTextarea1" rows="3"></textarea>
                          </div>
                      </div>
                        {{-- ---------------------first accordin------------------ --}}
                        <button class="btn btn-primary mb-2" type="button" data-toggle="collapse" data-target=".upper" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">শার্ট/পাঞ্জাবি/কামিজ</button>
                        <div class="collapse upper" id="multiCollapseExample2">
                            <div class="card card-body">
                                <div class="row">
                                    <div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2">
                                    <div class="form-group">
                                    <label for="exampleInputEmail1">লম্বা</label>
                                    <input type="text" name="up_long" class="form-control" >
                                  </div>
                                    </div>
                                    <div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2">
                                    <div class="form-group">
                                    <label for="exampleInputEmail1">বডি</label>
                                    <input type="text" name="up_body" class="form-control" >
                                  </div>
                                    </div>
                                    <div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2">
                                    <div class="form-group">
                                    <label for="exampleInputEmail1">বডি লুজ</label>
                                    <input type="text" name="up_bodyLose" class="form-control" >
                                  </div>
                                    </div>
                                    <div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2">
                                    <div class="form-group">
                                    <label for="exampleInputEmail1">পেট </label>
                                    <input type="text" name="pat" class="form-control" >
                                  </div>
                                    </div>
                                    <div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2">
                                    <div class="form-group">
                                    <label for="exampleInputEmail1">পুট</label>
                                    <input type="text" name="put" class="form-control" >
                                  </div>
                                    </div>
                                    <div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2">
                                    <div class="form-group">
                                    <label for="exampleInputEmail1">হাতার লম্বা </label>
                                    <input type="text" name="hattarLomba" class="form-control" >
                                  </div>
                                    </div>
                                </div>
                            
                                <div class="row">
                                    <div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2">
                                    <div class="form-group">
                                    <label for="exampleInputEmail1">হাতার মুখ</label>
                                    <input type="text" name="hattarMuk" class="form-control" >
                                  </div>
                                    </div>
                                    <div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2">
                                    <div class="form-group">
                                    <label for="exampleInputEmail1">কাফ</label>
                                    <input type="text" name="kaf" class="form-control" >
                                  </div>
                                    </div>
                                    <div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2">
                                    <div class="form-group">
                                    <label for="exampleInputEmail1">গলা</label>
                                    <input type="text" name="gola" class="form-control" >
                                  </div>
                                    </div>
                                    <div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2">
                                    <div class="form-group">
                                    <label for="exampleInputEmail1">প্লেট ফাড়া </label>
                                    <input type="text" name="plate_fara" class="form-control" >
                                  </div>
                                    </div>
                                    <div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2">
                                    <div class="form-group">
                                    <label for="exampleInputEmail1">কলার চওড়া</label>
                                    <input type="text" name="collar_choura" class="form-control" >
                                  </div>
                                    </div>
                                    <div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2">
                                    <div class="form-group">
                                    <label for="exampleInputEmail1">প্লেট চওড়া </label>
                                    <input type="text" name="plate_choura" class="form-control" >
                                  </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2">
                                    <div class="form-group">
                                    <label for="exampleInputEmail1">ঘের</label>
                                    <input type="text" name="ghar" class="form-control" >
                                  </div>
                                    </div>
                                    <div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2">
                                    <div class="form-group">
                                    <label for="exampleInputEmail1">হিফ </label>
                                    <input type="text" name="hif" class="form-control" >
                                  </div>
                                    </div>
                                    <div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2">
                                    <div class="form-group">
                                    <label for="exampleInputEmail1">নিচ হাতা</label>
                                    <input type="text" name="nich_hata" class="form-control" >
                                  </div>
                                    </div>
                                    <div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2">
                                    <div class="form-group">
                                    <label for="exampleInputEmail1">মাদানী ফাড়া </label>
                                    <input type="text" name="madani_fara" class="form-control" >
                                  </div>
                                    </div>
                                    <div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2">
                                    <div class="form-group">
                                    <label for="exampleInputEmail1">মোট মোড়া</label>
                                    <input type="text" name="mota_mor" class="form-control" >
                                  </div>
                                    </div>
                                    <div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2">
                                    <div class="form-group">
                                    <label for="exampleInputEmail1">হাতে পেস্টিং </label>
                                    <input type="text" name="hata_pasting" class="form-control" >
                                  </div>
                                    </div>
                                </div>
                                <h4>Pocket:</h4><br>
                                <div class="row">
                                    
                                    <div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3">
                                      
                                    <div class="form-check form-check-inline">
                                      @foreach ($UpperPocket as $UpperPocket)
                                      <input class="form-check-input " type="checkbox" id="inlineCheckbox1" value="{{$UpperPocket->name}}" name="up_pocket[]">
                                      <label class="form-check-label mr-2" for="inlineCheckbox1">{{$UpperPocket->name}} </label>
                                      @endforeach
                                    </div>
                                    
                                    </div>

                                </div>
                                <hr>

                                <h4 class="mt-2">Collar:</h4><br>
                                <div class="row">
                                    
                                    <div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3">
                                      
                                    <div class="form-check form-check-inline">
                                      @foreach ($collar as $collar)
                                      <input class="form-check-input " type="checkbox" id="inlineCheckbox1" value="{{$collar->name}}" name="up_collar[]">
                                      <label class="form-check-label mr-2" for="inlineCheckbox1">{{$collar->name}} </label>
                                      @endforeach
                                    </div>
                                    
                                    </div>

                                </div>
                                <hr>

                                <h4 class="mt-2">Gola:</h4><br>
                                <div class="row">
                                    
                                    <div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3">
                                      
                                    <div class="form-check form-check-inline">
                                      @foreach ($gola as $gola)
                                      <input class="form-check-input " type="checkbox" id="inlineCheckbox1" value="{{$gola->name}}" name="up_gola[]">
                                      <label class="form-check-label mr-2" for="inlineCheckbox1">{{$gola->name}} </label>
                                      @endforeach
                                    </div>
                                    
                                    </div>

                                </div>
                                <hr>
                                <h4 class="mt-2">Plate:</h4><br>
                                <div class="row">
                                    
                                    <div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3">
                                      
                                    <div class="form-check form-check-inline">
                                      @foreach ($plate as $plate)
                                      <input class="form-check-input " type="checkbox" id="inlineCheckbox1" value="{{$plate->name}}" name="up_plate[]">
                                      <label class="form-check-label mr-2" for="inlineCheckbox1">{{$plate->name}} </label>
                                      @endforeach
                                    </div>
                                    
                                    </div>

                                </div>

                                <hr>
                                <h4 class="mt-2">pasting:</h4><br>
                                <div class="row">
                                    
                                    <div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3">
                                      
                                    <div class="form-check form-check-inline">
                                      @foreach ($pasting as $pasting)
                                      <input class="form-check-input " type="checkbox" id="inlineCheckbox1" value="{{$pasting->name}}" name="up_pasting[]">
                                      <label class="form-check-label mr-2" for="inlineCheckbox1">{{$pasting->name}} </label>
                                      @endforeach
                                    </div>
                                    
                                    </div>

                                </div>

                                <hr>
                                <h4 class="mt-2">Lace:</h4><br>
                                <div class="row">
                                    
                                    <div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3">
                                      
                                    <div class="form-check form-check-inline">
                                      @foreach ($lace as $lace)
                                      <input class="form-check-input " type="checkbox" id="inlineCheckbox1" value="{{$lace->name}}" name="up_lace[]">
                                      <label class="form-check-label mr-2" for="inlineCheckbox1">{{$lace->name}} </label>
                                      @endforeach
                                    </div>
                                    
                                    </div>

                                </div>

                                <hr>
                                <h4 class="mt-2">Ful:</h4><br>
                                <div class="row">
                                    
                                    <div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3">
                                      
                                    <div class="form-check form-check-inline">
                                      @foreach ($ful as $ful)
                                      <input class="form-check-input " type="checkbox" id="inlineCheckbox1" value="{{$ful->name}}" name="up_ful[]">
                                      <label class="form-check-label mr-2" for="inlineCheckbox1">{{$ful->name}} </label>
                                      @endforeach
                                    </div>
                                    
                                    </div>

                                </div>

                                <hr>
                                <h4 class="mt-2">Button:</h4><br>
                                <div class="row">
                                    
                                    <div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3">
                                      
                                    <div class="form-check form-check-inline">
                                      @foreach ($button as $button)
                                      <input class="form-check-input " type="checkbox" id="inlineCheckbox1" value="{{$button->name}}" name="up_button[]">
                                      <label class="form-check-label mr-2" for="inlineCheckbox1">{{$button->name}} </label>
                                      @endforeach
                                    </div>
                                    
                                    </div>

                                </div>

                            </div>
                          </div>
                        {{-- ---------------------first accordin------------------ --}}

                        {{-- ---------------------2nd accordin------------------ --}}
                        <br>
                        <button class="btn btn-primary mb-2" type="button" data-toggle="collapse" data-target=".low" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">প‍্যান্ট প্রভৃতি মাপ</button>

                        <div class="collapse low" id="multiCollapseExample2">
                          <div class="card card-body">
                            <div class="row">
                              <div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2">
                              <div class="form-group">
                              <label for="exampleInputEmail1">লম্বা</label>
                              <input type="text" name="low_long" class="form-control" >
                            </div>
                              </div>
                              <div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2">
                              <div class="form-group">
                              <label for="exampleInputEmail1">পায়ের মুখ</label>
                              <input type="text" name="low_muk" class="form-control" >
                            </div>
                              </div>
                              <div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2">
                              <div class="form-group">
                              <label for="exampleInputEmail1">হাই</label>
                              <input type="text" name="low_hie" class="form-control" >
                            </div>
                              </div>
                              <div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2">
                              <div class="form-group">
                              <label for="exampleInputEmail1">ঘের/থাই লুজ </label>
                              <input type="text" name="low_ghar" class="form-control" >
                            </div>
                              </div>
                              <div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2">
                              <div class="form-group">
                              <label for="exampleInputEmail1">কোমড়</label>
                              <input type="text" name="low_komor" class="form-control" >
                            </div>
                              </div>
                              <div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2">
                              <div class="form-group">
                              <label for="exampleInputEmail1">বেল্ট টাইপ </label>
                              <input type="text" name="low_belt" class="form-control" >
                            </div>
                              </div>
                          </div>
                          <div class="row">
                            <div class="col-12 col-sm-4 col-md-2 col-lg-2 col-xl-2">
                            <div class="form-group">
                            <label for="exampleInputEmail1">হিফ</label>
                            <input type="text" name="low_hif" class="form-control" >
                          </div>
                            </div>
                        </div>

                        
                        <div class="row">
                            
                            <div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3">
                              
                            <div class="form-check form-check-inline">
                              @foreach ($LowerPocket as $LowerPocket)
                              <input class="form-check-input " type="checkbox" id="inlineCheckbox1" value="{{$LowerPocket->name}}" name="low_pocket[]">
                              <label class="form-check-label mr-2" for="inlineCheckbox1">{{$LowerPocket->name}} </label>
                              @endforeach
                            </div>
                            
                            </div>
                        </div>
                        <hr>

                          </div>
                        </div>
                        {{-- ---------------------2nd accordin------------------ --}}

                          {{-- ---------------------3rd accordin------------------ --}}
                          <br>
                          <button class="btn btn-primary mb-2" type="button" data-toggle="collapse" data-target=".delivery" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">ডেলিভারি তথ‍্য</button>

                          <div class="collapse delivery" id="multiCollapseExample2">
                            <div class="card card-body">
                              <div class="row">
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                <div class="form-group">
                                <label for="exampleInputEmail1">মজুরির পরিমাণ</label>
                                <input type="number" name="cost" class="form-control" >
                              </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                <div class="form-group">
                                <label for="exampleInputEmail1">নগদ প্রদান </label>
                                <input type="number" name="nogod" class="form-control" >
                              </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                <div class="form-group">
                                <label for="exampleInputEmail1">অর্ডারের তারিখ</label>
                                <input type="date" name="order_date" class="form-control" >
                              </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                <div class="form-group">
                                <label for="exampleInputEmail1">ডেলিভারির তারিখ  </label>
                                <input type="date" name="d_date" class="form-control" >
                              </div>
                                </div>
                                
                            </div>

                            <div class="form-group">
                              <label for="exampleFormControlTextarea1">মন্তব্য(শার্ট/পাঞ্জাবি/কামিজ)</label>
                              <textarea class="form-control" name="up_message" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                              <label for="exampleFormControlTextarea1">মন্তব্য(প‍্যান্ট প্রভৃতি মাপ)</label>
                              <textarea class="form-control" name="low_message" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                          

                            </div>
                          </div>
                          {{-- ---------------------3rd accordin------------------ --}}

                        <div class="form-group mt-3">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                        
                      </form>
                </div>
            </div>
        </div>
        <!-- data table end -->
        
    </div>
</div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('.select2').select2();
    })
</script>
@endsection