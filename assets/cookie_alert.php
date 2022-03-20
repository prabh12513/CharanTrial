<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie Alert</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body style="height: 1000px;">
    <div id="cookie-alert" class="bg-orange-200 fixed w-64 rounded-lg bottom-0 mb-5 ml-5">
        <div id="cookie-content-div" class="flex flex-col justify-center items-center">
            <div id="cookie-image-div" class="my-5">
                <img src="../components/cookie.png" alt="Error In Loading Image" class="h-20 w-20" id="cookie-img">
            </div>
            <div id="cookie-text-div" class="mx-5">
                <p id="cookie-text-p">This Site Uses Cookies To Improve User Experience And Analyze Website Traffic.</p>
            </div>
            <div id="cookie-button-div" class="flex mt-5 space-x-5 mb-5">
                <button id="cookie-button-agree" class=" h-10 w-24 bg-black text-white item-center rounded-lg">I Agree</button>
                <button id="cookie-button-reject" class=" h-10 w-24 bg-red-400 text-red-700 item-center rounded-lg">Reject All</button>
            </div>
        </div>
    </div>
</body>
</html>