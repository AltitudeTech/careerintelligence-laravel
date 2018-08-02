<form class="form-horizontal"  method="POST">
  <fieldset>
    <style>
      .control-group{
        margin: 10px 0px ;
      }
    </style>
    <div id="legend">
      <legend class="">Register</legend>
    </div>
    <div class="control-group">
      <label class="control-label pull-left"  for="username">Firstname</label>
        <input type="text" id="username" name="username" placeholder="" class="input-xlarge pull-right">
        <div class="clearfix"></div>
    </div>

    <div class="control-group">
      <label class="control-label pull-left"  for="username">Lastname</label>
        <input type="text" id="username" name="username" placeholder="" class="input-xlarge pull-right">
        <div class="clearfix"></div>
    </div>

    <div class="control-group">
      <label class="control-label pull-left"  for="username">Email</label>
        <input type="email" id="username" name="username" placeholder="" class="input-xlarge pull-right">
        <div class="clearfix"></div>
    </div>

    <div class="control-group">
      <label class="control-label pull-left"  for="username">Phone</label>
        <input type="text" id="username" name="username" placeholder="" class="input-xlarge pull-right">
        <div class="clearfix"></div>
    </div>

    <div class="control-group">
      <label class="control-label pull-left"  for="username">Company</label>
        <input type="text" id="username" name="username" placeholder="" class="input-xlarge pull-right">
        <div class="clearfix"></div>
    </div>

    <div class="control-group">
      <label class="control-label pull-left"  for="username">Job Title</label>
        <input type="text" id="username" name="username" placeholder="" class="input-xlarge pull-right">
        <div class="clearfix"></div>
    </div>

    <div class="control-group">
      <label class="control-label pull-left"  for="username">Sector</label>
        <select style="width: 70% ;" class="input-xlarge pull-right">
          @foreach (App\Admin\Sector::all() as $sector)
            <option value="{{$sector->id}}">{{$sector->name}}</option>
          @endforeach
        </select>
        <div class="clearfix"></div>
    </div>

    <div class="control-group">
      <label class="control-label pull-left"  for="username">Region</label>
        <input type="text" id="username" name="username" placeholder="" class="input-xlarge pull-right">
        <div class="clearfix"></div>
    </div>
 
    <div class="control-group">
      <!-- Button -->
      <div class="controls">
        <button class="btn btn-info btn-block" style="border-radius: 0px ">Register</button>
      </div>
    </div>
  </fieldset>
</form>