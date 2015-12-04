![Relation Field for Kirby CMS](http://distantnative.com/remote/github/kirby-relation-github.png)  

[![Release](https://img.shields.io/github/release/distantnative/relation.svg)](https://github.com/distantnative/relation/releases)  [![Issues](https://img.shields.io/github/issues/distantnative/relation.svg)](https://github.com/distantnative/relation/issues) [![License](https://img.shields.io/badge/license-GPLv3-blue.svg)](https://raw.githubusercontent.com/distantnative/relation/master/LICENSE)
[![Moral License](https://img.shields.io/badge/buy-moral_license-8dae28.svg)](https://gumroad.com/l/kirby-relation)

The Relation field plugin introduces a select field type for the panel that allows you to choose multiple entries.

The plugin is free, but I'd appreciate if you'd support me with a [moral license](https://gumroad.com/l/kirby-relation)!


# Installation & Update
Copy the files to `site/fields/relation/`.


# Usage

Use it in your blueprint:

```
bestband:
  label: Best Band Ever
  type: relation
  required: true
  search: true
  options:
    1d : 1Direction
    bb: BBoys
    aq: Aqua
    vb: Vengaboys
    fr: Freiheit
    o3: OH!O
    mi: Miley
    bi: Bieber
    u2: U2
```

Result: 

![relation](http://distantnative.com/remote/github/relation.gif)

It can also be used with the usual field options (pages etc.) of the checkboxes field.

# Version history <a id="VersionHistory"></a>
Check out the more or less complete [changelog](CHANGELOG.md).

