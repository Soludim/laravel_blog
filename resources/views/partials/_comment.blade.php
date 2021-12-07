<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">


<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h3>User Comments</h3>
        </div>
    </div>
    @foreach($userComments as $key =>  $value)
    <div class="row">
    <div class="col-sm-2 col-md-2 col-lg-1 col-xs-2">
            <div class="thumbnail">
                <img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
            </div>
        </div>

        <div class="col-sm-9 col-md-9 col-xs-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <strong>{{$value->user->name}}</strong> 
                    <span class="text-muted">
                        commented on {{date('F', strtotime($value->updated_at))}} {{date('d', strtotime($value->updated_at)) }}
                    </span>
                </div>
                <div class="panel-body">
                    {{ $value->content }}
                </div>
            </div>
        </div>
    </div>
    @endforeach       
</div>