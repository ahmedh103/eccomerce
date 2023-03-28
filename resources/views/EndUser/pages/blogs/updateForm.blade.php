<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>RegistrationForm_v10 by Colorlib</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- LINEARICONS -->
		<link rel="stylesheet" href="{{asset("register/fonts/linearicons/style.css")}}">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="{{asset("register/css/style.css")}}">
	</head>

	<body>

		<div class="wrapper">
			<div class="inner">
				<img src="{{asset("register/images/image-1.png")}}" alt="" class="image-1">
                <h4 class="lnr lnr-arrow-left text-white p-2"><a href="{{url('/blog')}}" class="text-white">{{__('user.role_back')}}</a></h4>
				<form action="{{route('endUser.blog.update',$blog)}}" method="POST" enctype="multipart/form-data">
					@csrf
                    @method('PUT')
					<h3>{{__('user.edit_blog')}}</h3>
					<div class="form-holder">
						<span class="lnr lnr-arrow-right"></span>
						<input type="text" class="form-control"  value="{{$blog->getTranslation('title','en')}}" placeholder="{{__('user.title_en')}}" name="name_en">
                        @error('name_en')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
					</div>

                    <div class="form-holder">
                        <span class="lnr lnr-arrow-right"></span>
                        <input type="text" class="form-control" value="{{$blog->getTranslation('title','ar')}}" placeholder="{{__('user.title_ar')}}" name="name_ar">
                        @error('name_ar')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>

					<div class="form-holder">
                        <span class="lnr lnr-arrow-right"></span>
                        <textarea class="form-control" name="desc_en" placeholder="{{__('user.desc_en')}}">{{$blog->getTranslation('description','en')}}</textarea>
                        @error('desc_en')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
					</div>

                    <div class="form-holder">
                        <span class="lnr lnr-arrow-right"></span>
                        <textarea class="form-control" name="desc_ar"  placeholder="{{__('user.desc_ar')}}">{{$blog->getTranslation('description','ar')}}</textarea>
                        @error('desc_ar')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>

					<div class="form-holder">
                        <span class="lnr lnr-arrow-right"></span>
					    <input type="file" class="form-control" name="image">
                        @error('image')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
					</div>
					<button>
						<span>{{__('user.update')}}</span>
					</button>


				</form>
				<img src="{{asset("register/images/image-2.png")}}" alt="" class="image-2">
			</div>

		</div>

		<script src="{{asset("register/js/jquery-3.3.1.min.js")}} "></script>
		<script src="{{asset("register/js/main.js")}} "></script>
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
