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

                  <div class="widget-content widget-content-area br-6">
                            <div class="table-responsive mb-4 mt-4">

                              <button id="add-work-platforms" class="btn btn-default"><a style="color: blue;" href="{{ url('/todo/create') }}">Click to add new</a>
                              </button>

                                <table id="zero-config" class="table table-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th>Name</th>
                                            <th>Category</th>
                                            <th>Description</th>                           
                                            <th class="no-content"></th>
                                            <th class="no-content"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @php($i = 1)
                                      @if($todos != false)
                                      @foreach($todos as $todo)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>{{$todo->todo}}</td>
                                            <td>{{$todo->category}}</td>
                                            <td>{{$todo->description}}</td>

                                            <td>
                                              <a id="view{{$todo->id}}" href="{{url('/todo/'.$todo->id).'/edit'}}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg></a>
                                            </td>

                                            <td>
                                              <a id="delete{{$todo->id}}" href="#" class="secondary-content" onclick="event.preventDefault();
                                                document.getElementById('delete-form').submit();">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle table-cancel"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg></a><form id="delete-form" action="{{url('/todo/'.$todo->id)}}" method="POST" style="display: none;">
                                                  {{ method_field('DELETE') }}{{ csrf_field() }}
                                                     </form>
                                              </td>
                                        </tr>
                                        @endforeach
                                        @endif
                                    
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Category</th>
                                            <th>Description</th>                                      
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
                                </table>
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