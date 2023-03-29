<!DOCTYPE html>
<html lang="en">

@include('auth.head')

<body class="alt-menu sidebar-noneoverflow">
  <!-- BEGIN LOADER -->
  <div id="load_screen"> <div class="loader"> <div class="loader-content">
      <div class="spinner-grow align-self-center"></div>
  </div></div></div>
  <!--  END LOADER -->

  <!--  BEGIN NAVBAR  -->
  @include('auth.navbar')
  <!--  END NAVBAR  -->

  <!--  BEGIN MAIN CONTAINER  -->
  <div class="main-container sidebar-closed sbar-open" id="container">

      <div class="overlay"></div>
      <div class="cs-overlay"></div>
      <div class="search-overlay"></div>

      <!--  BEGIN SIDEBAR  -->
      @include('auth.sidebar')
      <!--  END SIDEBAR  -->

      <!--  BEGIN CONTENT AREA  -->
      <div id="content" class="main-content">
        <div class="layout-px-spacing">
            <div class="row layout-top-spacing">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">

                  <div id="flRegistrationForm" class="col-lg-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">        
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Edit Todo</h4>
                                </div>                                                                        
                            </div>
                        </div>
                  
                        <div class="widget-content widget-content-area col-m-6">
                          <form class="form-horizontal" method="post" action="{{url('/todo/'.$todo->id)}}">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                  
                                <div class="form-group mb-4">
                                  <input type="text" class="form-control" id="todo" name="todo" placeholder="todo name" value="{{$todo->todo}}">
                                    @if ($errors->has('todo'))
                                          <span class="help-block">
                                              <strong>{{ $errors->first('todo') }}</strong>
                                          </span>
                                    @endif
                                </div>
                  
                                <div class="form-group mb-4">
                                  <input type="text" class="form-control" id="category" name="category" placeholder="category" value="{{$todo->category}}">
                                  @if ($errors->has('category'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('category') }}</strong>
                                      </span>
                                  @endif
                                </div>
                  
                                <div class="form-group mb-4">
                                  <textarea class="form-control" id="description" name="description" placeholder="category"> {{$todo->description}}
                                  </textarea>
                                    @if ($errors->has('description'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('description') }}</strong>
                                        </span>
                                    @endif
                                </div>
                  
                                <div class="form-group">
                                  <div class="col-sm-offset-2 col-md-5">
                                    <button type="submit" class="btn btn-default">Update</button>
                                  </div>
                                </div>
                  
                            </form>
                        </div>
                    </div>
                  </div>
                  
                </div>
              </div>
          </div>
      </div>
      <!--  END CONTENT AREA  -->
  
  </div>
  <!-- END MAIN CONTAINER -->


<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
@include('auth.script')
<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

</body>
</html>