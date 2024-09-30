<x-app-layout>
    <x-slot name="header">
        <center><h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Accueil') }}
            </h2></center>
    </x-slot>
    <?php
    echo '<div style="text-align: center;">';
    echo "<br><br><br><br><br><br>";
    echo '<a href="http://127.0.0.1:8000/profile">Mise à jour des utilisateurs</a>';
    echo "<br><br>";
    echo '<a href="http://127.0.0.1:8000/events">Mise à jour des événements</a>';
    echo '</div>';
    ?>

</x-app-layout>
