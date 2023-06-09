<!doctype html>
<html lang="en">

    @include('layout_backend.snippets.head')

    <body>
    
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    @include('layout_backend.snippets.sidebar')
    <!--  Main wrapper -->
    <div class="body-wrapper">
        @include('layout_backend.snippets.header')
        @include('layout_backend.snippets.content_page')
       
    </div>
  </div>
  @include('layout_backend.snippets.scripts')



</body>

</html>