import Dropzone from "dropzone";

Dropzone.autoDiscover = false

const dropzone = new Dropzone('#dropzone', {
    dictDefaultMessage: 'Sube aquí archivos en formato pdf',
    acceptedFiles: ".pdf",
    addRemoveLinks: true,
    dictRemoveFile: 'Borrar Archivo',
    maxFiles: 1,
    uploadMultiple: false,
})