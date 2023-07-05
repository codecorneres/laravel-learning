<html>
    <body>
        <h1> This is a Test Page </h1>

        <h2>Hello, {{ $name }}</h2>
        <h3>The current date is {{ date('m/d/Y h:i:s a', time()) }}.</h3>
        
        @if ($count === 1)
            <p>I have one value!</p>
        @elseif ($count > 1)
            <p>I have multiple count value!</p>
        @else
            <p>I don't have any count value!</p>
        @endif

        @unless (Auth::check())
            <p>You are not signed in.</p><br/>
        @endunless

        @for ($i = 0; $i < 10; $i++)
             value is {{ $i }} <br/>
        @endfor

        {{ URL::current() }} <br>
        <?php echo url()->current();  ?>
        
       <br/>
        <?php echo url()->full(); ?>
        <br/>
        <?php echo url()->previous(); ?>

    </body>
</html>






