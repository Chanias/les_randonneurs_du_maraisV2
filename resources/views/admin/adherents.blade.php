@extends('layouts.app')

 @section('title')
     INTERFACE ADMINISTRATEUR
 @endsection
 
 @section('content')
     <!---------------------------------------------LES ADHERENTS :---------------------------------------------->
     <!--LISTE ADHERENTS-->
     <div class="container" id="liste_adherents">
         <div class="mb-4">
             <!-- On parcourt la liste des adhérents -->
             <h2 class="text-center">La liste des adhérents</h2>
             <table class="table text-center">
                 <thead>
                     <tr>
                         <th>Nom :</th>
                         <th>Prénom :</th>
                         <th>Date de naissance :</th>
                         <th>Numéro de téléphone fixe :</th>
                         <th>Numéro de téléphone portable :</th>
                         <th>Email :</th>
 
                         <th>Supprimer</th>
                     </tr>
                 </thead>
 
                 <tbody>
                     @foreach ($users as $user)
                         <tr>
                             <td>{{ $user->nom }}</td>
                             <td>{{ $user->prenom }}</td>
                             <td>{{ $user->date_de_naissance }}</td>
                             <td>{{ $user->num_telephone_fixe }}</td>
                             <td>{{ $user->num_telephone_portable }}</td>
                             <td>{{ $user->email }}</td>
 
 
 
                             <!--SUPPRIMER L'UTILISATEUR-->
                             <form method="POST" action="{{ route('user.destroy', $user) }}">
                                 <!-- CSRF token -->
                                 @csrf
                                 @method('DELETE')
                                 <td>
                                     <input type="submit" class="btn btn-danger" value="Supprimer utilisateur">
                                 </td>
                             </form>
                         </tr>
                 </tbody>
                 @endforeach
 
             </table>
         </div>
     </div>
     @endsection
