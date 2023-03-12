API.Topics = {
    show: function ()
    {
        API.request('Nexus.Topics.Show', {

        }, function (data) {
            $('#map').html(data.render);
        }, function () {

        });
    },

    create: function ()
    {
        if(!confirm('Are you sure?'))
        {
            return;
        }

        API.request('Nexus.Topics.Create', {
            'debug': true
        }, function (data) {
            API.Topics.show();
        }, function () {

        });
    },

    remove: function (key)
    {
        if(!confirm('Are you sure?'))
        {
            return;
        }

        API.request('Nexus.Topics.Remove', {
            'key': key
        }, function (data) {
            API.Topics.show();
        }, function () {

        });
    },

    edit: function (key)
    {
        API.request('Nexus.Topics.Edit', {
            'key': key
        }, function (data) {
            $('#map').html(data.render);
        }, function () {

        });
    },

    save: function (key)
    {
        if(!confirm('Are you sure?'))
        {
            return;
        }

        const jq_block = $('#ticket-edit');
        API.request('Nexus.Topics.Save', {
            'key': key,
            'title': jq_block.find('[name="title"]').val(),
            'program': jq_block.find('[name="program"]').val(),
            'url': jq_block.find('[name="url"]').val(),
            'start': jq_block.find('[name="start"]').val(),
            'finish': jq_block.find('[name="finish"]').val(),
            'status': jq_block.find('[name="status"]').val(),
            'type': jq_block.find('[name="type"]').val(),
            'data': jq_block.find('[name="data"]').val()
        }, function (data) {
            API.Topics.show();
        }, function () {

        });
    }
}