<x-auth-page>
    

    @if (session('success'))
        <p style='color: green'>
            {{session('success')}}
        </p>
    @endif
    <form class='container' action="{{ route('user.store.work-experience') }}" method="post">
        @csrf
        <x-title>WORK EXPERIENCE</x-title>
        <x-input type='text' name='company' label='Company'/>
        <x-input type='date' name='from' label='From'/>
        <x-input type='date' name='to' label='To'/>
        <x-input type='text' name='position' label='Position'/>

        <x-submit-button type='submit' text='Submit'/>
    </form>
</x-auth-page>