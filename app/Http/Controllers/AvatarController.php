<link rel="stylesheet" href="{{ asset('css/style.css') }}">


@if ($errors->any())
    <div style="color: red; border: 1px solid red; padding: 10px;">
        <strong>Oops! Correct the mistakes:</strong>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<h3>Hello, {{ $name }}! Here is your picture 🎨 </h3>

@if($name)

<img src="https://ui-avatars.com/api/?name={{ urlencode($name) }}&size={{ $size }}&background={{ $bg }}&color={{ $color }}&font-size={{ $font }}&length={{ $length }}&rounded={{ $round ? 'true' : 'false' }}&bold={{ $bold ? 'true' : 'false' }}&uppercase={{ $large ? 'true' : 'false' }}&format={{ $format }}" alt="Avatar">

@endif

<form action="{{ route('avatarURL') }}" method="post">
    @csrf
    
    <p>Your NickName?</p>
    <p><input type="text" name="name"  value="{{ old('name', $name) }}"></p>
    
    <hr>
    
    <p>Proportions Image | Between: 16 and 512</p>
    <p><input type="number" name="size" value="{{ old('size', $size) }}" ></p>
    
    <hr>

    <p>Number of letters | Between: 1 and 5</p> 
    <p><input type="number" name="length" value="{{ old('length', $length) }}"></p>

    <hr>

   <p>
   
<span>Background</span>
<select name="bg">
    <option value="random" {{ old('bg', $bg) == 'random' ? 'selected' : '' }}>🎲 Random</option>
    <option value="ffffff" {{ old('bg', $bg) == 'ffffff' ? 'selected' : '' }}>⚪ White</option>
    <option value="000000" {{ old('bg', $bg) == '000000' ? 'selected' : '' }}>⚫ Dark</option>
    <option value="ffff00" {{ old('bg', $bg) == 'ffff00' ? 'selected' : '' }}>🟡 Yellow</option>
    <option value="ff0000" {{ old('bg', $bg) == 'ff0000' ? 'selected' : '' }}>🔴 Red</option>
    <option value="0000ff" {{ old('bg', $bg) == '0000ff' ? 'selected' : '' }}>🔵 Blue</option>
    <option value="00ff00" {{ old('bg', $bg) == '00ff00' ? 'selected' : '' }}>🟢 Green</option>
</select>



<span>| Color</span>
<select name="color">

    <option value="a020f0" {{ old('color', $color) == 'a020f0' ? 'selected' : '' }}>🟣 Purple</option>
    <option value="ffffff" {{ old('color', $color) == 'ffffff' ? 'selected' : '' }}>⚪ White</option>
    <option value="000000" {{ old('color', $color) == '000000' ? 'selected' : '' }}>⚫ Dark</option>
    <option value="ffff00" {{ old('color', $color) == 'ffff00' ? 'selected' : '' }}>🟡 Yellow</option>
    <option value="ff0000" {{ old('color', $color) == 'ff0000' ? 'selected' : '' }}>🔴 Red</option>
    <option value="0000ff" {{ old('color', $color) == '0000ff' ? 'selected' : '' }}>🔵 Blue</option>
    <option value="00ff00" {{ old('color', $color) == '00ff00' ? 'selected' : '' }}>🟢 Green</option>

</select>

    
<span> | Font-Size</span>
<select name="font">
    
    <option value="0.2" {{ old('font', $font) == '0.2' ? 'selected' : '' }}>1️⃣ Low</option>
    <option value="0.4" {{ old('font', $font) == '0.4' ? 'selected' : '' }}>2️⃣ Normal</option>
    <option value="0.6" {{ old('font', $font) == '0.6' ? 'selected' : '' }}>3️⃣ Medium</option>
    <option value="0.8" {{ old('font', $font) == '0.8' ? 'selected' : '' }}>4️⃣ Big</option>
    <option value="1"   {{ old('font', $font) == '1'   ? 'selected' : '' }}>5️⃣ Ultra</option>

</select>


</p>

<hr>

<p>

<span>Round up?</span>
<input type="radio" name="round" id="round-yes" value="1" {{ old('round', $round) == '1' ? 'checked' : '' }}>
<label for="round-yes">Yes</label>

<input type="radio" id="round-no" name="round" value="0" {{ old('round', $round) == '0' ? 'checked' : '' }}>
<label for="round-no">No</label>

</p>

<hr> 

<p>


<span>Bold text?</span>
<input type="radio" name="bold" id="bold-yes" value="1" {{ old('bold', $bold) == '1' ? 'checked' : '' }}>
<label for="bold-yes">Yes</label>

<input type="radio" name="bold" id="bold-no" value="0" {{ old('bold', $bold) == '0' ? 'checked' : '' }}>
<label for="bold-no">No</label>

</p>

<hr>

<p>

<span>Large symbols (after two)?</span>
<input type="radio" id="large-yes" name="large" value="1" {{ old('large', $large) == '1' ? 'checked' : '' }}>
<label for="large-yes">Yes</label>

<input type="radio" id="large-no" name="large" value="0" {{ old('large', $large) == '0' ? 'checked' : '' }}>
<label for="large-no">No</label>

</p>
<hr>

<p>Define the format

    <input type="radio" name="format" id="png" value="png" {{ old('format', $format) == 'png' ? 'checked' : '' }}>
    <label for="png">PNG</label>

    <input type="radio" name="format" id="svg" value="svg" {{ old('format', $format) == 'svg' ? 'checked' : '' }}>
    <label for="svg">SVG</label>

</p>

<hr>
    <p><button type="submit">Generate!</button></p>
</form>
