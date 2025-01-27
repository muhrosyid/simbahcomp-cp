<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{asset('css/output.css')}}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
  <!-- CSS for carousel/flickity-->
  <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
  <link rel="stylesheet" href="https://unpkg.com/flickity-fade@2/flickity-fade.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.2/flickity.min.css">
  {{-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> --}}
  <style>
    .chatbox {
        position: fixed;
        bottom: 80px;
        right: 20px;
        width: 320px;
        max-height: 400px;
        background: #e9f5ff;
        border: 1px solid #007bff;
        border-radius: 10px;
        display: none;
        flex-direction: column;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        overflow: hidden;
    }
    .chatbox-header {
        background: #007bff;
        color: white;
        padding: 10px;
        font-weight: bold;
        text-align: center;
    }
    .chatbox-body {
        flex: 1;
        padding: 10px;
        overflow-y: auto;
        background: #ffffff;
    }
    .chatbox-footer {
        padding: 10px;
        background: #f1f1f1;
        border-top: 1px solid #007bff;
        display: flex;
        gap: 5px;
    }
    .chatbox-footer input {
        flex: 1;
    }
    .chat-message {
        background: #007bff;
        color: white;
        border-radius: 15px;
        padding: 8px 12px;
        max-width: 70%;
        margin-bottom: 10px;
        font-size: 90%;
    }
    .chat-message.user {
        background: #e9f5ff;
        color: #007bff;
        align-self: flex-end;
    }
    .chat-toggle-btn {
        position: fixed;
        bottom: 20px;
        right: 20px;
        width: 60px;
        height: 60px;
        background: #007bff;
        color: white;
        border: none;
        border-radius: 50%;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        font-size: 24px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
    }
  </style>
  
  
  <!-- CSS for modal/flowbite -->
  <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"  rel="stylesheet" /> -->
</head>
<body class="font-poppins text-cp-black">
    @yield('content')
    
    @stack('before-script')

    @stack('after-script')
    
</body>
</html>