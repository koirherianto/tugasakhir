<!-- Judul Field -->
<div class="form-group col-sm-6">
    {!! Form::label('judul', 'Judul:') !!}
    {!! Form::text('judul', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Subjudul Field -->
<div class="form-group col-sm-6">
    {!! Form::label('subjudul', 'Subjudul:') !!}
    {!! Form::text('subjudul', null, ['class' => 'form-control']) !!}
</div>

<!-- Posisi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('posisi', 'Posisi:') !!}
    {!! Form::text('posisi', null, ['class' => 'form-control colorpicker']) !!}
</div>


<input type="hidden" name="red" class="form-control" id="red">
<input type="hidden" name="green" class="form-control" id="green">
<input type="hidden" name="blue" class="form-control" id="blue">



<!-- Is Kanan Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('is_kanan', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('is_kanan', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('is_kanan', 'Is Kanan', ['class' => 'form-check-label']) !!}
    </div>
</div>

<div class="form-group col-sm-6">
    {!! Form::label('color_rgb', 'Color:') !!}
    <input type="color" name="color_rgb" class="form-control" id="color-picker">
</div>

<!-- Mindmap Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mindmap_id', 'Mindmap Id:') !!}
    {!! Form::number('mindmap_id', null, ['class' => 'form-control']) !!}
</div>

<script>
    const colorPicker = document.querySelector('#color-picker');
    colorPicker.addEventListener('change', function() {
        const rgbColor = hexToRgb(colorPicker.value);

        var inputt = document.getElementById("color-picker");
        var red = document.getElementById("red");
        var green = document.getElementById("green");
        var blue = document.getElementById("blue");
        red.value = rgbColor.r; 
        green.value = rgbColor.g; 
        blue.value = rgbColor.b; 
        console.log(red.value);
    });

    function hexToRgb(hex) {
        const shorthandRegex = /^#?([a-f\d])([a-f\d])([a-f\d])$/i;
        hex = hex.replace(shorthandRegex, function(m, r, g, b) {
            return r + r + g + g + b + b;
        });

        const result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);
        return result ? {
            r: parseInt(result[1], 16),
            g: parseInt(result[2], 16),
            b: parseInt(result[3], 16)
        } : null;
    }
</script>
