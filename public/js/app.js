var app = angular.module('notesLaravel', []);
var user = { firstname: 'Bruno', lastname: 'Paglialunga' };

app.controller('NotesController', function(){
    this.user = user;
});