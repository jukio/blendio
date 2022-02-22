<div style="text-align: center; font-size: 40px; margin-top: 100px; color: #ffffff; background: #000; padding:30px;">
@if(!empty($calculate))
El resultado de la suma es: {{$calculate}}
@else
Hay datos erroneos, debe revisar la entrada de los datos ya que falta algún parámetro o alguno no es númerico
@endif
</div>