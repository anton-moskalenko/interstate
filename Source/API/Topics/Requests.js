API.Topics = {
    collection: function ()
    {
        API.request('Interstate.Topics.Collection', {

        }, function (data) {
            $('#map').html(data.render);
        }, function () {

        });
    },

    show: function ()
    {
        API.request('Interstate.Topics.Show', {

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

        API.request('Interstate.Topics.Create', {
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

        API.request('Interstate.Topics.Remove', {
            'key': key
        }, function (data) {
            API.Topics.show();
        }, function () {

        });
    },

    edit: function (key)
    {
        API.request('Interstate.Topics.Edit', {
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
        API.request('Interstate.Topics.Save', {
            'key': key,
            'uid': jq_block.find('[name="uid"]').val(),
            'title': jq_block.find('[name="title"]').val(),
            'program': jq_block.find('[name="program"]').val(),
            'status': jq_block.find('[name="status"]').val(),
            'url': jq_block.find('[name="url"]').val(),
            'tags': jq_block.find('[name="tags"]').val(),
            'data': jq_block.find('[name="data"]').val()
        }, function (data) {
            API.Topics.show();
        }, function () {

        });
    }
}