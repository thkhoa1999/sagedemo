<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0"/>
  <link rel="icon" href="{{App::getFavicon()}}" type="image/x-icon">
  <link rel="apple-touch-icon" sizes="180x180" href="{{App::getAppleIcon()}}">
  @php wp_head() @endphp
  {!! App::getTrackingCode('in_head') !!}
</head>
