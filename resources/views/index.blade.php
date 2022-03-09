@extends('layout')
@section('content')
  <div class="bg-warning p-3 mt-5">
    <form method="post" action="#" novalidate="#">
      <div class="Polaris-FormLayout">
        <div class="Polaris-FormLayout__Item">
          <div class="">
            <div class="Polaris-Labelled__LabelWrapper">
              <div class="Polaris-Label"><label id="PolarisTextField4Label" for="PolarisTextField4" class="Polaris-Label__Text">Enter Type</label></div>
            </div>
            <div class="Polaris-Connected">
              <div id="reopen" class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                <div class="Polaris-TextField">
                    <input placeholder="Enter Type" id="PolarisTextField4" autocomplete="off" class="Polaris-TextField__Input" type="text" aria-labelledby="PolarisTextField4Label" aria-invalid="false" value="">
                  <div class="Polaris-TextField__Backdrop"></div>
                </div>
              </div>
            </div>
          </div>
            <div class="Polaris-ButtonGroup__Item">
                <button class="Polaris-Button Polaris-Button--primary added" type="button"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text">Add Type</span></span></button>
                <button class="Polaris-Button Polaris-Button minus" type="button"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text">Remove Type</span></span></button>
            </div>
        </div>
        <div class="Polaris-FormLayout__Item"><button class="Polaris-Button" type="submit"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text">Submit</span></span></button></div>
      </div><span class="Polaris-VisuallyHidden"><button type="submit" aria-hidden="true" tabindex="-1">Submit</button></span>
    </form>
    <div id="PolarisPortalsContainer"></div>
  </div>
@endsection

@section('scripts')
<script>
    $('.added').click(function(){
        var input = jQuery('<div class="Polaris-TextField mt-3"> <input placeholder="Enter Type" id="PolarisTextField4" autocomplete="off" class="Polaris-TextField__Input" type="text" aria-labelledby="PolarisTextField4Label" aria-invalid="false" value=""> <div class="Polaris-TextField__Backdrop"></div> </div>');
        jQuery('#reopen').append(input);
    });
    
    $('.minus').click(function(){
        if ($('#reopen > div').length > 1) {
        $('#reopen > div').last().remove();
    }
    });
</script>
@endsection