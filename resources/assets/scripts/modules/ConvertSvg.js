const internals = {
  /**
   * Function
   */
  appendsvg(data, $img) {
    const imgID = $img.attr('id')
    const imgClass = $img.attr('class')
    let $svg = $(data).find('svg')
    if (typeof imgID !== 'undefined') {
      $svg = $svg.attr('id', imgID)
    }
    if (typeof imgClass !== 'undefined') {
      $svg = $svg.attr('class', imgClass + ' replaced-svg')
    }
    $svg = $svg.removeAttr('xmlns:a')
    if (!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
      $svg.attr('viewBox', `0 0 ${$svg.attr('height')} ${$svg.attr('width')}`)
    }
    if ($svg.length) {
      $img.replaceWith($svg)
    }
  },
  convertSvg() {
    const $hasSvg = $('img.img-svg:not(.lazy)')
    if ($hasSvg.length) {
      $hasSvg.each((index, e) => {
        const $img = $(e)
        const imgURL = $img.attr('src')
        if (imgURL !== null) {
          $.get(imgURL, (data) => {
            this.appendsvg(data, $img)
          }, 'xml')
        }
      })
    }
  }
}

const ConvertSvg = (() => {
  internals.convertSvg()
})()

export default ConvertSvg