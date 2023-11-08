## KudosuHistory

Field      | Type                    | Description
-----------|-------------------------|-----------------------------
id         | integer                 | |
action     | string                  | One of `give`, `vote.give`, `reset`, `vote.reset`, `revoke`, or `vote.revoke`.
amount     | integer                 | |
model      | string                  | Object type which the exchange happened on (`forum_post`, etc).
created_at | [Timestamp](#timestamp) | |
giver      | Giver?                  | Simple detail of the user who started the exchange.
post       | Post                    | Simple detail of the object for display.

### Giver

Field    | Type
---------|-------
url      | string
username | string

### Post

Field | Type    | Description
------|---------|------------------------------------------------------------------------
url   | string? | Url of the object.
title | string  | Title of the object. It'll be "[deleted beatmap]" for deleted beatmaps.
