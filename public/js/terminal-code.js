$('#terminal-exec').terminal({
    time: function(){
        this.echo($('#digital-clock').text());
    },
    date: function(){
        const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

        const d = new Date();
        let month = months[d.getMonth()];

        this.echo(month+' '+d.getDate()+' '+d.getFullYear());
    },
    aboutfolio: function(){
        this.echo('Username: Reyneil');
        this.echo($('.laraver').text());
        this.echo($('.phpver').text());
        this.echo('Bootstrap Version: 5.0.2');
        this.echo('Jquery Version: '+$().jquery);
        this.echo('Jquery UI Version: '+$.ui.version);

    },
    help: function(){
        this.echo('');
    },
}, {
    greetings: 'Executioner 2022.1',
    name: 'net-exec',
    height: 300,
    prompt: 'Netfolio$=> '
});