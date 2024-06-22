<!DOCTYPE html>
<html lang="en">
@include('includes.head')

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        @include('includes.preloader') @include('includes.navbar')
        @include('includes.sidebar')

        <div class="content-wrapper">@yield('content')</div>

        @include('includes.footer')
    </div>
    @include('includes.scripts')

    <script>
        window.embeddedChatbotConfig = {
            chatbotId: "R_Z9Zb3t8jozAhR80AiUV",
            domain: "www.chatbase.co"
        }
    </script>
    <script src="https://www.chatbase.co/embed.min.js" chatbotId="R_Z9Zb3t8jozAhR80AiUV" domain="www.chatbase.co" defer>
    </script>
</body>

</html>
