#### Repeater config files path

```
~/themes/your_theme/repeaters/config-repeatername.yaml
```

#### Example config yaml

```yaml
# ===================================
#  Form Content Control Config
# ===================================

menu:
  label: 'Home page'   #required
  slug: index          #required
  icon: icon-home
  order: 2

repeater:
  index-list:
    label: 'Index list'   #required
    fields:               #required and not empty
      jobs-list:
        label: 'Jobs list'
        prompt: 'wbry.content::repeater.prompt'
        span: auto
        type: repeater
        form:
          fields:
            test1:
              label: 'Sub jobs list'
              prompt: 'wbry.content::repeater.prompt'
              span: auto
              type: repeater
              form: {}
      super-jobs-list:
        label: 'Super jobs list'
        prompt: 'Individual name'
        span: auto
        type: repeater
        form: {}
      text1:
        label: Text
        span: auto
        type: text
  products:
    label: 'Product list'
    fields:
      product-type:
        label: 'Product types'
        prompt: 'wbry.content::repeater.prompt'
        span: auto
        type: repeater
        form: {}
```