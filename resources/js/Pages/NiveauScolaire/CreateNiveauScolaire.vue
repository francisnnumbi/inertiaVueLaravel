<template>
  <button class="btn btn-primary" data-toggle="modal" data-target="#createNVModal">
    <i class="fa fa-plus"></i> Nouveau
  </button>

  <!-- Create a modal -->
  <div
    class="modal fade"
    id="createNVModal"
    data-backdrop="static"
    data-keyboard="false"
    tabindex="-1"
    aria-labelledby="createNVModalLabel"
    aria-hidden="true"
  >
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="createNVModalLabel">Ajout d'un niveau scolaire</h5>
          <button type="button" @click="closeModal" class="close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form @submit.prevent="soumettre" id="createForm">
            <div class="dorm-group">
              <label for="">Nom</label>
              <input
                type="text"
                required
                class="form-control"
                v-model="nomNiveauScolaire"
              />
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" @click="closeModal">Fermer</button>
          <button form="createForm" type="submit" class="btn btn-success">
            Soumettre
          </button>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { Inertia } from "@inertiajs/inertia";
import { ref, onMounted } from "vue";
import {useSwalSuccess, useSwalError} from "../../Composables/alert";

const nomNiveauScolaire = ref("");

let createModal = "";

onMounted(()=>{
  createModal = $("#createNVModal");
})


const closeModal = () => {
  createModal.modal("hide");
  nomNiveauScolaire.value = "";
};

const soumettre = () => {
  const nom = nomNiveauScolaire.value;
  const url = route("niveauscolaire.store");
  Inertia.post(url, {nom:nom}, {
    onSuccess: (page)=>{
      closeModal();

     // alert("Niveau scolaire ajouté avec succès");
      // Afficher un message de succès
     useSwalSuccess("Niveau scolaire ajouté avec succès !");
    },
    onError: (error)=>{
       // Afficher un message de succès
       useSwalError("Une erreur s'est produite !");
    }
  });
};
</script>
