<div class="container">
  <div class="row mb40">
     <div class="col-md-12 text-center">
        <h2 class="mt0 mb10 probootstrap-animate">Will you attend?</h2>
        <p>Please sign your Register</p>
     </div>
  </div>
  <div class="row">
     <div class="col-md-6 col-md-offset-3">
        <div class="probootstrap-card probootstrap-animate">
           <form  method="POST" action="/register/filter">
              {{csrf_field()}}
              <div class="form-group">
                 <label for="name">Your Name</label>
                 <input  type="text" class="form-control" name="nama" >
              </div>
              <div class="form-group">
                 <label for="email">Your Email</label>
                 <input  type="text" class="form-control" name="email" >
              </div>
              <div class="form-group">
                 <p>Will you attend?</p>
                 <label for="yes">
                 <input type="checkbox"  value="Yes, I will be therees" name="opsi"> Yes, I will be there</label> <br>
                 <label for="no">
                 <input type="checkbox"  value="Sorry, I can't come" name="opsi"> Sorry, I can't come</label> <br>
              </div>
              <div class="form-group">
                 <label for="note">Note</label>
                 <textarea  name="note" id="note" cols="20" rows="5" class="form-control"></textarea>
              </div>
              <div class="form-group">
                 <button type="submit" class="btn btn-primary btn-lg" value="Submit">Submit</button>
              </div>
           </form>
        </div>
     </div>
  </div>
</div>
</div>
<div class="container">
  <div class="row">
     <div class="col-md-6 col-md-offset-3">
        @foreach($datax as $data)
        <div class="panel-body" class="ex3">
           <ul class="list-group">
              <li class="list-group-item">
                 <div class="row">
                    <div class="probootstrap-card probootstrap-animate fadeInUp probootstrap-animated">
                       <h3 class="mt0 mb10 probootstrap-animate">
                       {{ $data->nama }}</h5>
                       <a >
                          <h4 >{{ $data->email }}</h4>
                       </a>
                       <p><label class="probootstrap-card probootstrap-animate fadeInUp probootstrap-animated"> <i class="fa fa-comment-o"> </i> {{ $data->note }} ...</label></p>
                       <i class="fa fa-clock-o"></i>{{ $data->created_at }}
                       <p><i class="fa fa-gittip"></i> Like</p>
                    </div>
                 </div>
              </li>
           </ul>
        </div>
        @endforeach 
     </div>
  </div>
</div>