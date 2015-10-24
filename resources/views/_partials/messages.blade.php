@if (Session::has('alert-info'))
  <div id="flashMessage" class="flash_message info">
    <p class="flash_message--text">{{ Session::get('alert-info') }}</p>

    <button id="closeFlashMessage" class="flash_message--close_button"><i class="fa fa-close"></i></button>
  </div>
@endif

@if (Session::has('alert-success'))
  <div id="flashMessage" class="flash_message success">
    <p class="flash_message--text">{{ Session::get('alert-success') }}</p>

    <button id="closeFlashMessage" class="flash_message--close_button"><i class="fa fa-close"></i></button>
  </div>
@endif

@if (Session::has('alert-warning'))
  <div id="flashMessage" class="flash_message warning">
    <p class="flash_message--text">{{ Session::get('alert-warning') }}</p>

    <button id="closeFlashMessage" class="flash_message--close_button"><i class="fa fa-close"></i></button>
  </div>
@endif

@if (Session::has('alert-danger'))
  <div id="flashMessage" class="flash_message danger">
    <p class="flash_message--text">{{ Session::get('alert-danger') }}</p>

    <button id="closeFlashMessage" class="flash_message--close_button"><i class="fa fa-close"></i></button>
  </div>
@endif

@if (Session::has('flash-info'))
  <div id="flashMessage" class="flash_message info js-flashMessage">
    <p class="flash_message--text">{{ Session::get('flash-flash_message') }}</p>

    <button id="closeFlashMessage" class="flash_message--close_button"><i class="fa fa-close"></i></button>
  </div>
@endif

@if (Session::has('flash-success'))
  <div id="flashMessage" class="flash_message success js-flashMessage">
    <p class="flash_message--text">{{ Session::get('flash-success') }}</p>

    <button id="closeFlashMessage" class="flash_message--close_button"><i class="fa fa-close"></i></button>
  </div>
@endif

@if (Session::has('flash-warning'))
  <div id="flashMessage" class="flash_message warning js-flashMessage">
    <p class="flash_message--text">{{ Session::get('flash-warning') }}</p>

    <button id="closeFlashMessage" class="flash_message--close_button"><i class="fa fa-close"></i></button>
  </div>
@endif

@if (Session::has('flash-danger'))
  <div id="flashMessage" class="flash_message danger js-flashMessage">
    <p class="flash_message--text">{{ Session::get('flash-danger') }}</p>

    <button id="closeFlashMessage" class="flash_message--close_button"><i class="fa fa-close"></i></button>
  </div>
@endif
