<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html> 
<head>
    <title>{{config('app.name','MyBlog')}}</title>
    <script src="./js/script.js"></script>
    <link rel="icon" type="image/ico" href="/storage/favicon.ico" />
    <script src="./js/script.js"></script>
      <link rel = "stylesheet" href = "https://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/w3-css/4.1.0/w3.css" ></link>
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('w3.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/jquery.js')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" ></link>
    <!-- Styles -->
    <link href="{{ asset('bootstrap.css') }}" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"></meta>

			<style>
.w3-xxjumbo{font-size:100px!important}
.w3-margin-large{margin:44px!important}
.w3-padding-xxlarge{padding:24px 40px!important}
.w3-padding-xlarge{padding:24px 36px!important}
.w3-transparent-black{color:#fff!important;background-color:rgba(0,0,0,0.7);!important}
.w3-border-top-round{border-top:4px solid;border-radius:80px #ccc!important}
.w3-round-jumbo{border-radius:80px}
.w3-topbar-small{border-top:2px solid #ccc!important}
.w3-bottombar-small{border-bottom:2px solid #ccc!important}
.w3-topbar-medium{border-top:4px solid #ccc!important}
.w3-bottombar-medium{border-bottom:4px solid #ccc!important}
.w3-round-xxxlarge{border-radius:60px}
.w3-border-xlarge{border:8px solid #ccc!important}
.w3-border-large{border:4px solid #ccc!important}
.w3-border-top-large{border-top:4px solid #ccc!important}
.w3-border-top-xlarge{border-top:6px solid #ccc!important}
.w3-xjumbo{font-size:80px!important}
				a{
					/*color: rgb(94,16,156);*/
					color: rgb(39,16,100);
				}
					/*			
				.pagination {
				  display: -ms-flexbox;
				  display: flex;
				  padding-left: 0;
				  list-style: none;
				  border-radius: 0.25rem;
				}
*/
					.border-center{
						display:flex;
						justify-content:center;
					}
					.w3-center{
						display:inline-block;
						width:100%;
						text-align:center;
					}
			
					body{
						background-color:gray;
					}
			
					.body{
							font-family:serif;
							font-size:100%;
						}
						
				@media screen and (orientation:landscape){

					.body{
							font-family:serif;
							font-size:145%;
							/*width:85%;*/
							padding-left: 10%;
							padding-right: 10%;
						}
						
				}
						.header{
							font-size:500%;
						}
						
						
						
						.blog-description{
							font-size:20%;
						}
						
						.post-topic{
							font-size:120%;
						}
						
						/*CREATE POST*/
						.create-post{
							font-size:100%;
						}
						
						.form-input1{
							font-size:110%;
							width:95%;
						}
						
						.form-input2{
							font-size:140%;
							width:95%;
							height:250px;
						}
						
						.form-input3{
							font-size:80%;
							width:95%;
						}
						
						.submit{
							font-size:120%;
						}
						
						.footer{
							font-size:130%;
						}
			</style>
</head>
<body>
	<div class="body ">

			<!--HEADER-->
			<div class="header w3-center">
					<a href="{{url('/')}}" style="text-decoration:none;"><b class=""><b class="">{{config('app.name','MyBlog')}}</b></b></a>
					<div class="description" >
							<hr />
							<i class="blog-description">The Best Informative Blog For The Best</i>
							<hr />
					</div>
			</div>

			

			@yield('content')
		

		<!--FOOTER-->
		<div class="footer w3-center">
				<hr />
				<b class="">MyBlog &copy 2022</b>
		</div>

	</div>
</body>
</html>