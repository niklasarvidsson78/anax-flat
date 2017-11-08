---
views:
    byline:
        region: after-main
        template: default/content
        sort: 1
        data:
            meta:
                type: content
                route: block/byline

    flashy:
        region: flash
        template: default/content
        sort: -1
        data:
            meta:
                type: content
                route: block/byline

    sidebar1:
        region: sidebar-left
        template: default/content
        sort: 1
        data:
            meta:
                type: content
                route: block/byline

    sidebar2:
        region: sidebar-right
        template: default/content
        sort: 1
        data:
            meta:
                type: content
                route: block/byline        
...

Testsida
==============================================

Hallå där!

Detta är bara min lilla testsida.

En random snubbe bara
![En random snubbe](https://static.pexels.com/photos/91227/pexels-photo-91227.jpeg?w=80)
