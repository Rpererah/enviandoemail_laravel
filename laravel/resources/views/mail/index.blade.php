@component('mail::message')
# Serie {{$nomeSerie}} acaba de ser adicionada!
- venha conferir no botao abaixo!

@component('mail::button',['url'=>'url'])
Ver Serie!
@endcomponent
@endcomponent