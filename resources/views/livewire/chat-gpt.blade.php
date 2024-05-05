<div style="margin:-20px 0 200px 0">
    <div style="min-height: 100px"></div>
    <div class="container" style="padding-right: 20px;padding-left: 20px;padding-top: 10px;padding-bottom: 10px;background: #3A61D0;border-color: var(--bs-gray-dark);border-radius: 8px;">
        <div class="card" style="min-height: 300px;" id="text_ai">
            @if($this->response)
            {{dd($this->response)}}
                <p>{{ $this->response}}</p>
            @endif
        </div>
        <div class="input-group d-flex flex-column">
            <input class="form-control" style="width: 100%;border-bottom-right-radius: 6px;border-top-right-radius: 6px;border-width: 2px;" placeholder="mettez votre question ici" wire:model="prompt">
{{--            <textarea class="form-control" style="width: 100%;border-bottom-right-radius: 6px;border-top-right-radius: 6px;border-width: 2px;" placeholder="mettez votre question ici" wire:model="message"></textarea>--}}
            <div class="input-group-text input-group-text input-group-text" style="text-align: center;border-radius: 6px;background: rgb(233, 236, 239);border-width: 2px;border-color: rgb(233, 236, 239);">
                <div class="d-flex justify-content-center align-items-center input-group-text btn btn-group-lg" style="width: 100%;text-align: center;background: rgb(233, 236, 239);border-color: #3A61D0;" wire:click="sendRequest"><i class="d-flex form-control-lg" style="text-align: center;color: #3A61D0;">send</i></div>
            </div>
        </div>
    </div>
</div>


<script>
    // Fonction pour afficher le texte lettre par lettre avec un délai entre chaque lettre
    function afficherTexteLettreParLettre(texte, element, delai) {
        let index = 0;
        const texteLongueur = texte.length;

        // Définir une fonction d'animation à intervalles
        const intervalId = setInterval(function() {
            if (index < texteLongueur) {
                // Récupérer le texte actuel de l'élément
                let contenuActuel = element.textContent || '';

                // Ajouter la lettre suivante du texte
                contenuActuel += texte.charAt(index);
                element.textContent = contenuActuel;

                // Incrémenter l'index pour passer à la lettre suivante
                index++;
            } else {
                // Arrêter l'animation une fois toutes les lettres affichées
                clearInterval(intervalId);
            }
        }, delai); // Délai entre l'affichage de chaque lettre (en millisecondes)
    }

    // Sélection de l'élément div
    const divElement = document.getElementById('text_ai');

    const delaiEntreLettres = 100; // Délai en millisecondes entre chaque lettre


    document.addEventListener('DOMContentLoaded', function() {
        // Récupérer la réponse de l'API à partir de la propriété $response du composant Livewire
        var texte = "{{ $response }}";


        // Vérifier si la réponse n'est pas vide
        if (texte.trim() !== "") {
            // Mettre à jour la variable "texte" dans le script JavaScript avec la réponse de l'API
            texte = texte.trim();

        } else {
            // Utiliser le texte par défaut si la réponse est vide
            texte = "Ici vous aurez la réponse de l'IA";
        }

        // Appeler la fonction pour afficher le texte lettre par lettre dans l'élément div
        afficherTexteLettreParLettre(texte, divElement, delaiEntreLettres);
    });
</script>






// <div wire:ignore>
//     <div style="margin:-20px 0 200px 0">
//         <div style="min-height: 100px"></div>
//         <div class="container" style="padding-right: 20px;padding-left: 20px;padding-top: 10px;padding-bottom: 10px;background: #3A61D0;border-color: var(--bs-gray-dark);border-radius: 8px;">
//             <div class="card" style="min-height: 300px;" id="text_ai">
//                 <p id="response-text"></p>
//             </div>
//             <div class="input-group d-flex flex-column">
//                 <input class="form-control" style="width: 100%;border-bottom-right-radius: 6px;border-top-right-radius: 6px;border-width: 2px;" placeholder="mettez votre question ici" wire:model="prompt">
//                 <div class="input-group-text input-group-text input-group-text" style="text-align: center;border-radius: 6px;background: rgb(233, 236, 239);border-width: 2px;border-color: rgb(233, 236, 239);">
//                     <div class="d-flex justify-content-center align-items-center input-group-text btn btn-group-lg" style="width: 100%;text-align: center;background: rgb(233, 236, 239);border-color: #3A61D0;" wire:click="sendRequest"><i class="d-flex form-control-lg" style="text-align: center;color: #3A61D0;">send</i></div>
//                 </div>
//             </div>
//         </div>
//     </div>
// </div>

// @push('scripts')
//     <script>
//         document.addEventListener('DOMContentLoaded', function() {
//             Livewire.on('responseReceived', response => {
//                 let text = response.trim();
//                 let index = 0;
//                 let delay = 50; // délai en millisecondes entre chaque lettre

//                 let responseTextElement = document.getElementById('response-text');

//                 let typeText = function() {
//                     if (index < text.length) {
//                         responseTextElement.innerHTML += text[index];
//                         index++;
//                         setTimeout(typeText, delay);
//                     }
//                 };

//                 typeText();
//             });
//         });
//     </script>
// @endpush
