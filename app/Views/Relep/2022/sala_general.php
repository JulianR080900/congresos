<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <style media="all">
    img.wp-smiley,
    img.emoji {
      display: inline !important;
      border: none !important;
      box-shadow: none !important;
      height: 1em !important;
      width: 1em !important;
      margin: 0 .07em !important;
      vertical-align: -.1em !important;
      background: 0 0 !important;
      padding: 0 !important
    }

    :root {
      --wp-admin-theme-color: #007cba;
      --wp-admin-theme-color-darker-10: #006ba1;
      --wp-admin-theme-color-darker-20: #005a87
    }

    #start-resizable-editor-section {
      display: none
    }

    .wp-block-audio figcaption {
      margin-top: .5em;
      margin-bottom: 1em
    }

    .wp-block-audio audio {
      width: 100%;
      min-width: 300px
    }

    .wp-block-button__link {
      color: #fff;
      background-color: #32373c;
      border: none;
      border-radius: 28px;
      box-shadow: none;
      cursor: pointer;
      display: inline-block;
      font-size: 18px;
      padding: 12px 24px;
      text-align: center;
      text-decoration: none;
      overflow-wrap: break-word
    }

    .wp-block-button__link:active,
    .wp-block-button__link:focus,
    .wp-block-button__link:hover,
    .wp-block-button__link:visited {
      color: #fff
    }

    .wp-block-button__link.aligncenter {
      text-align: center
    }

    .wp-block-button__link.alignright {
      text-align: right
    }

    .wp-block-button.is-style-squared,
    .wp-block-button__link.wp-block-button.is-style-squared {
      border-radius: 0
    }

    .wp-block-button.no-border-radius,
    .wp-block-button__link.no-border-radius {
      border-radius: 0 !important
    }

    .is-style-outline .wp-block-button__link,
    .wp-block-button__link.is-style-outline {
      color: #32373c;
      background-color: transparent;
      border: 2px solid
    }

    .wp-block-buttons .wp-block-button {
      display: inline-block;
      margin-right: 8px;
      margin-bottom: 8px
    }

    .wp-block-buttons .wp-block-button:last-child {
      margin-right: 0
    }

    .wp-block-buttons.alignright .wp-block-button {
      margin-right: 0;
      margin-left: 8px
    }

    .wp-block-buttons.alignright .wp-block-button:first-child {
      margin-left: 0
    }

    .wp-block-buttons.alignleft .wp-block-button {
      margin-left: 0;
      margin-right: 8px
    }

    .wp-block-buttons.alignleft .wp-block-button:last-child {
      margin-right: 0
    }

    .wp-block-button.aligncenter,
    .wp-block-buttons.aligncenter,
    .wp-block-calendar {
      text-align: center
    }

    .wp-block-calendar tbody td,
    .wp-block-calendar th {
      padding: 4px;
      border: 1px solid #ddd
    }

    .wp-block-calendar tfoot td {
      border: none
    }

    .wp-block-calendar table {
      width: 100%;
      border-collapse: collapse;
      font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Oxygen-Sans, Ubuntu, Cantarell, Helvetica Neue, sans-serif
    }

    .wp-block-calendar table th {
      font-weight: 400;
      background: #ddd
    }

    .wp-block-calendar a {
      text-decoration: underline
    }

    .wp-block-calendar tfoot a {
      color: #007cba;
      color: var(--wp-admin-theme-color)
    }

    .wp-block-calendar table caption,
    .wp-block-calendar table tbody {
      color: #40464d
    }

    .wp-block-categories.alignleft {
      margin-right: 2em
    }

    .wp-block-categories.alignright {
      margin-left: 2em
    }

    .wp-block-columns {
      display: flex;
      margin-bottom: 28px;
      flex-wrap: wrap
    }

    @media (min-width:782px) {
      .wp-block-columns {
        flex-wrap: nowrap
      }
    }

    .wp-block-columns.has-background {
      padding: 20px 38px
    }

    .wp-block-column {
      flex-grow: 1;
      min-width: 0;
      word-break: break-word;
      overflow-wrap: break-word
    }

    @media (max-width:599px) {
      .wp-block-column {
        flex-basis: 100% !important
      }
    }

    @media (min-width:600px) and (max-width:781px) {
      .wp-block-column {
        flex-basis: calc(50% - 16px) !important;
        flex-grow: 0
      }

      .wp-block-column:nth-child(2n) {
        margin-left: 32px
      }
    }

    @media (min-width:782px) {
      .wp-block-column {
        flex-basis: 0;
        flex-grow: 1
      }

      .wp-block-column[style*=flex-basis] {
        flex-grow: 0
      }

      .wp-block-column:not(:first-child) {
        margin-left: 32px
      }
    }

    .wp-block-columns.are-vertically-aligned-top {
      align-items: flex-start
    }

    .wp-block-columns.are-vertically-aligned-center {
      align-items: center
    }

    .wp-block-columns.are-vertically-aligned-bottom {
      align-items: flex-end
    }

    .wp-block-column.is-vertically-aligned-top {
      align-self: flex-start
    }

    .wp-block-column.is-vertically-aligned-center {
      -ms-grid-row-align: center;
      align-self: center
    }

    .wp-block-column.is-vertically-aligned-bottom {
      align-self: flex-end
    }

    .wp-block-column.is-vertically-aligned-bottom,
    .wp-block-column.is-vertically-aligned-center,
    .wp-block-column.is-vertically-aligned-top {
      width: 100%
    }

    .wp-block-cover,
    .wp-block-cover-image {
      position: relative;
      background-size: cover;
      background-position: 50%;
      min-height: 430px;
      height: 100%;
      width: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 16px
    }

    .wp-block-cover-image.has-parallax,
    .wp-block-cover.has-parallax {
      background-attachment: fixed
    }

    @supports (-webkit-overflow-scrolling:touch) {

      .wp-block-cover-image.has-parallax,
      .wp-block-cover.has-parallax {
        background-attachment: scroll
      }
    }

    @media (prefers-reduced-motion:reduce) {

      .wp-block-cover-image.has-parallax,
      .wp-block-cover.has-parallax {
        background-attachment: scroll
      }
    }

    .wp-block-cover-image.has-background-dim,
    .wp-block-cover.has-background-dim {
      background-color: #000
    }

    .wp-block-cover-image.has-background-dim:before,
    .wp-block-cover.has-background-dim:before {
      content: "";
      background-color: inherit
    }

    .wp-block-cover-image.has-background-dim:not(.has-background-gradient):before,
    .wp-block-cover-image .wp-block-cover__gradient-background,
    .wp-block-cover.has-background-dim:not(.has-background-gradient):before,
    .wp-block-cover .wp-block-cover__gradient-background {
      position: absolute;
      top: 0;
      left: 0;
      bottom: 0;
      right: 0;
      z-index: 1
    }

    .wp-block-cover-image.has-background-dim:not(.has-background-gradient):before,
    .wp-block-cover-image .wp-block-cover__gradient-background,
    .wp-block-cover.has-background-dim:not(.has-background-gradient):before,
    .wp-block-cover .wp-block-cover__gradient-background {
      opacity: .5
    }

    .wp-block-cover-image.has-background-dim.has-background-dim-10:not(.has-background-gradient):before,
    .wp-block-cover.has-background-dim.has-background-dim-10:not(.has-background-gradient):before {
      opacity: .1
    }

    .wp-block-cover-image.has-background-dim.has-background-dim-10 .wp-block-cover__gradient-background,
    .wp-block-cover.has-background-dim.has-background-dim-10 .wp-block-cover__gradient-background {
      opacity: .1
    }

    .wp-block-cover-image.has-background-dim.has-background-dim-20:not(.has-background-gradient):before,
    .wp-block-cover.has-background-dim.has-background-dim-20:not(.has-background-gradient):before {
      opacity: .2
    }

    .wp-block-cover-image.has-background-dim.has-background-dim-20 .wp-block-cover__gradient-background,
    .wp-block-cover.has-background-dim.has-background-dim-20 .wp-block-cover__gradient-background {
      opacity: .2
    }

    .wp-block-cover-image.has-background-dim.has-background-dim-30:not(.has-background-gradient):before,
    .wp-block-cover.has-background-dim.has-background-dim-30:not(.has-background-gradient):before {
      opacity: .3
    }

    .wp-block-cover-image.has-background-dim.has-background-dim-30 .wp-block-cover__gradient-background,
    .wp-block-cover.has-background-dim.has-background-dim-30 .wp-block-cover__gradient-background {
      opacity: .3
    }

    .wp-block-cover-image.has-background-dim.has-background-dim-40:not(.has-background-gradient):before,
    .wp-block-cover.has-background-dim.has-background-dim-40:not(.has-background-gradient):before {
      opacity: .4
    }

    .wp-block-cover-image.has-background-dim.has-background-dim-40 .wp-block-cover__gradient-background,
    .wp-block-cover.has-background-dim.has-background-dim-40 .wp-block-cover__gradient-background {
      opacity: .4
    }

    .wp-block-cover-image.has-background-dim.has-background-dim-50:not(.has-background-gradient):before,
    .wp-block-cover.has-background-dim.has-background-dim-50:not(.has-background-gradient):before {
      opacity: .5
    }

    .wp-block-cover-image.has-background-dim.has-background-dim-50 .wp-block-cover__gradient-background,
    .wp-block-cover.has-background-dim.has-background-dim-50 .wp-block-cover__gradient-background {
      opacity: .5
    }

    .wp-block-cover-image.has-background-dim.has-background-dim-60:not(.has-background-gradient):before,
    .wp-block-cover.has-background-dim.has-background-dim-60:not(.has-background-gradient):before {
      opacity: .6
    }

    .wp-block-cover-image.has-background-dim.has-background-dim-60 .wp-block-cover__gradient-background,
    .wp-block-cover.has-background-dim.has-background-dim-60 .wp-block-cover__gradient-background {
      opacity: .6
    }

    .wp-block-cover-image.has-background-dim.has-background-dim-70:not(.has-background-gradient):before,
    .wp-block-cover.has-background-dim.has-background-dim-70:not(.has-background-gradient):before {
      opacity: .7
    }

    .wp-block-cover-image.has-background-dim.has-background-dim-70 .wp-block-cover__gradient-background,
    .wp-block-cover.has-background-dim.has-background-dim-70 .wp-block-cover__gradient-background {
      opacity: .7
    }

    .wp-block-cover-image.has-background-dim.has-background-dim-80:not(.has-background-gradient):before,
    .wp-block-cover.has-background-dim.has-background-dim-80:not(.has-background-gradient):before {
      opacity: .8
    }

    .wp-block-cover-image.has-background-dim.has-background-dim-80 .wp-block-cover__gradient-background,
    .wp-block-cover.has-background-dim.has-background-dim-80 .wp-block-cover__gradient-background {
      opacity: .8
    }

    .wp-block-cover-image.has-background-dim.has-background-dim-90:not(.has-background-gradient):before,
    .wp-block-cover.has-background-dim.has-background-dim-90:not(.has-background-gradient):before {
      opacity: .9
    }

    .wp-block-cover-image.has-background-dim.has-background-dim-90 .wp-block-cover__gradient-background,
    .wp-block-cover.has-background-dim.has-background-dim-90 .wp-block-cover__gradient-background {
      opacity: .9
    }

    .wp-block-cover-image.has-background-dim.has-background-dim-100:not(.has-background-gradient):before,
    .wp-block-cover.has-background-dim.has-background-dim-100:not(.has-background-gradient):before {
      opacity: 1
    }

    .wp-block-cover-image.has-background-dim.has-background-dim-100 .wp-block-cover__gradient-background,
    .wp-block-cover.has-background-dim.has-background-dim-100 .wp-block-cover__gradient-background {
      opacity: 1
    }

    .wp-block-cover-image.alignleft,
    .wp-block-cover-image.alignright,
    .wp-block-cover.alignleft,
    .wp-block-cover.alignright {
      max-width: 290px;
      width: 100%
    }

    .wp-block-cover-image:after,
    .wp-block-cover:after {
      display: block;
      content: "";
      font-size: 0;
      min-height: inherit
    }

    @supports ((position:-webkit-sticky) or (position:sticky)) {

      .wp-block-cover-image:after,
      .wp-block-cover:after {
        content: none
      }
    }

    .wp-block-cover-image.aligncenter,
    .wp-block-cover-image.alignleft,
    .wp-block-cover-image.alignright,
    .wp-block-cover.aligncenter,
    .wp-block-cover.alignleft,
    .wp-block-cover.alignright {
      display: flex
    }

    .wp-block-cover-image .wp-block-cover__inner-container,
    .wp-block-cover .wp-block-cover__inner-container {
      width: calc(100% - 70px);
      z-index: 1;
      color: #fff
    }

    .wp-block-cover-image .wp-block-subhead:not(.has-text-color),
    .wp-block-cover-image h1:not(.has-text-color),
    .wp-block-cover-image h2:not(.has-text-color),
    .wp-block-cover-image h3:not(.has-text-color),
    .wp-block-cover-image h4:not(.has-text-color),
    .wp-block-cover-image h5:not(.has-text-color),
    .wp-block-cover-image h6:not(.has-text-color),
    .wp-block-cover-image p:not(.has-text-color),
    .wp-block-cover .wp-block-subhead:not(.has-text-color),
    .wp-block-cover h1:not(.has-text-color),
    .wp-block-cover h2:not(.has-text-color),
    .wp-block-cover h3:not(.has-text-color),
    .wp-block-cover h4:not(.has-text-color),
    .wp-block-cover h5:not(.has-text-color),
    .wp-block-cover h6:not(.has-text-color),
    .wp-block-cover p:not(.has-text-color) {
      color: inherit
    }

    .wp-block-cover-image.is-position-top-left,
    .wp-block-cover.is-position-top-left {
      align-items: flex-start;
      justify-content: flex-start
    }

    .wp-block-cover-image.is-position-top-center,
    .wp-block-cover.is-position-top-center {
      align-items: flex-start;
      justify-content: center
    }

    .wp-block-cover-image.is-position-top-right,
    .wp-block-cover.is-position-top-right {
      align-items: flex-start;
      justify-content: flex-end
    }

    .wp-block-cover-image.is-position-center-left,
    .wp-block-cover.is-position-center-left {
      align-items: center;
      justify-content: flex-start
    }

    .wp-block-cover-image.is-position-center-center,
    .wp-block-cover.is-position-center-center {
      align-items: center;
      justify-content: center
    }

    .wp-block-cover-image.is-position-center-right,
    .wp-block-cover.is-position-center-right {
      align-items: center;
      justify-content: flex-end
    }

    .wp-block-cover-image.is-position-bottom-left,
    .wp-block-cover.is-position-bottom-left {
      align-items: flex-end;
      justify-content: flex-start
    }

    .wp-block-cover-image.is-position-bottom-center,
    .wp-block-cover.is-position-bottom-center {
      align-items: flex-end;
      justify-content: center
    }

    .wp-block-cover-image.is-position-bottom-right,
    .wp-block-cover.is-position-bottom-right {
      align-items: flex-end;
      justify-content: flex-end
    }

    .wp-block-cover-image.has-custom-content-position.has-custom-content-position .wp-block-cover__inner-container,
    .wp-block-cover.has-custom-content-position.has-custom-content-position .wp-block-cover__inner-container {
      margin: 0;
      width: auto
    }

    .wp-block-cover__video-background {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translateX(-50%) translateY(-50%);
      width: 100%;
      height: 100%;
      z-index: 0;
      object-fit: cover
    }

    .wp-block-cover-image-text,
    .wp-block-cover-text,
    section.wp-block-cover-image h2 {
      color: #fff
    }

    .wp-block-cover-image-text a,
    .wp-block-cover-image-text a:active,
    .wp-block-cover-image-text a:focus,
    .wp-block-cover-image-text a:hover,
    .wp-block-cover-text a,
    .wp-block-cover-text a:active,
    .wp-block-cover-text a:focus,
    .wp-block-cover-text a:hover,
    section.wp-block-cover-image h2 a,
    section.wp-block-cover-image h2 a:active,
    section.wp-block-cover-image h2 a:focus,
    section.wp-block-cover-image h2 a:hover {
      color: #fff
    }

    .wp-block-cover-image .wp-block-cover.has-left-content {
      justify-content: flex-start
    }

    .wp-block-cover-image .wp-block-cover.has-right-content {
      justify-content: flex-end
    }

    .wp-block-cover-image.has-left-content .wp-block-cover-image-text,
    .wp-block-cover.has-left-content .wp-block-cover-text,
    section.wp-block-cover-image.has-left-content>h2 {
      margin-left: 0;
      text-align: left
    }

    .wp-block-cover-image.has-right-content .wp-block-cover-image-text,
    .wp-block-cover.has-right-content .wp-block-cover-text,
    section.wp-block-cover-image.has-right-content>h2 {
      margin-right: 0;
      text-align: right
    }

    .wp-block-cover-image .wp-block-cover-image-text,
    .wp-block-cover .wp-block-cover-text,
    section.wp-block-cover-image>h2 {
      font-size: 2em;
      line-height: 1.25;
      z-index: 1;
      margin-bottom: 0;
      max-width: 580px;
      padding: 14px;
      text-align: center
    }

    .wp-block-embed.alignleft,
    .wp-block-embed.alignright,
    .wp-block[data-align=left]>[data-type^=core-embed],
    .wp-block[data-align=right]>[data-type^=core-embed] {
      max-width: 360px;
      width: 100%
    }

    .wp-block-embed.alignleft .wp-block-embed__wrapper,
    .wp-block-embed.alignright .wp-block-embed__wrapper,
    .wp-block[data-align=left]>[data-type^=core-embed] .wp-block-embed__wrapper,
    .wp-block[data-align=right]>[data-type^=core-embed] .wp-block-embed__wrapper {
      min-width: 280px
    }

    .wp-block-embed {
      margin-bottom: 1em
    }

    .wp-block-embed figcaption {
      margin-top: .5em;
      margin-bottom: 1em
    }

    .wp-block-embed iframe {
      max-width: 100%
    }

    .wp-block-embed__wrapper {
      position: relative
    }

    .wp-embed-responsive .wp-has-aspect-ratio .wp-block-embed__wrapper:before {
      content: "";
      display: block;
      padding-top: 50%
    }

    .wp-embed-responsive .wp-has-aspect-ratio iframe {
      position: absolute;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      height: 100%;
      width: 100%
    }

    .wp-embed-responsive .wp-embed-aspect-21-9 .wp-block-embed__wrapper:before {
      padding-top: 42.85%
    }

    .wp-embed-responsive .wp-embed-aspect-18-9 .wp-block-embed__wrapper:before {
      padding-top: 50%
    }

    .wp-embed-responsive .wp-embed-aspect-16-9 .wp-block-embed__wrapper:before {
      padding-top: 56.25%
    }

    .wp-embed-responsive .wp-embed-aspect-4-3 .wp-block-embed__wrapper:before {
      padding-top: 75%
    }

    .wp-embed-responsive .wp-embed-aspect-1-1 .wp-block-embed__wrapper:before {
      padding-top: 100%
    }

    .wp-embed-responsive .wp-embed-aspect-9-6 .wp-block-embed__wrapper:before {
      padding-top: 66.66%
    }

    .wp-embed-responsive .wp-embed-aspect-1-2 .wp-block-embed__wrapper:before {
      padding-top: 200%
    }

    .wp-block-file {
      margin-bottom: 1.5em
    }

    .wp-block-file.aligncenter {
      text-align: center
    }

    .wp-block-file.alignright {
      text-align: right
    }

    .wp-block-file .wp-block-file__button {
      background: #32373c;
      border-radius: 2em;
      color: #fff;
      font-size: 13px;
      padding: .5em 1em
    }

    .wp-block-file a.wp-block-file__button {
      text-decoration: none
    }

    .wp-block-file a.wp-block-file__button:active,
    .wp-block-file a.wp-block-file__button:focus,
    .wp-block-file a.wp-block-file__button:hover,
    .wp-block-file a.wp-block-file__button:visited {
      box-shadow: none;
      color: #fff;
      opacity: .85;
      text-decoration: none
    }

    .wp-block-file *+.wp-block-file__button {
      margin-left: .75em
    }

    .blocks-gallery-grid,
    .wp-block-gallery {
      display: flex;
      flex-wrap: wrap;
      list-style-type: none;
      padding: 0;
      margin: 0
    }

    .blocks-gallery-grid .blocks-gallery-image,
    .blocks-gallery-grid .blocks-gallery-item,
    .wp-block-gallery .blocks-gallery-image,
    .wp-block-gallery .blocks-gallery-item {
      margin: 0 16px 16px 0;
      display: flex;
      flex-grow: 1;
      flex-direction: column;
      justify-content: center;
      position: relative
    }

    .blocks-gallery-grid .blocks-gallery-image figure,
    .blocks-gallery-grid .blocks-gallery-item figure,
    .wp-block-gallery .blocks-gallery-image figure,
    .wp-block-gallery .blocks-gallery-item figure {
      margin: 0;
      height: 100%
    }

    @supports ((position:-webkit-sticky) or (position:sticky)) {

      .blocks-gallery-grid .blocks-gallery-image figure,
      .blocks-gallery-grid .blocks-gallery-item figure,
      .wp-block-gallery .blocks-gallery-image figure,
      .wp-block-gallery .blocks-gallery-item figure {
        display: flex;
        align-items: flex-end;
        justify-content: flex-start
      }
    }

    .blocks-gallery-grid .blocks-gallery-image img,
    .blocks-gallery-grid .blocks-gallery-item img,
    .wp-block-gallery .blocks-gallery-image img,
    .wp-block-gallery .blocks-gallery-item img {
      display: block;
      max-width: 100%;
      height: auto;
      width: 100%
    }

    @supports ((position:-webkit-sticky) or (position:sticky)) {

      .blocks-gallery-grid .blocks-gallery-image img,
      .blocks-gallery-grid .blocks-gallery-item img,
      .wp-block-gallery .blocks-gallery-image img,
      .wp-block-gallery .blocks-gallery-item img {
        width: auto
      }
    }

    .blocks-gallery-grid .blocks-gallery-image figcaption,
    .blocks-gallery-grid .blocks-gallery-item figcaption,
    .wp-block-gallery .blocks-gallery-image figcaption,
    .wp-block-gallery .blocks-gallery-item figcaption {
      position: absolute;
      bottom: 0;
      width: 100%;
      max-height: 100%;
      overflow: auto;
      padding: 40px 10px 9px;
      color: #fff;
      text-align: center;
      font-size: 13px;
      background: linear-gradient(0deg, rgba(0, 0, 0, .7), rgba(0, 0, 0, .3) 70%, transparent)
    }

    .blocks-gallery-grid .blocks-gallery-image figcaption img,
    .blocks-gallery-grid .blocks-gallery-item figcaption img,
    .wp-block-gallery .blocks-gallery-image figcaption img,
    .wp-block-gallery .blocks-gallery-item figcaption img {
      display: inline
    }

    .blocks-gallery-grid.is-cropped .blocks-gallery-image a,
    .blocks-gallery-grid.is-cropped .blocks-gallery-image img,
    .blocks-gallery-grid.is-cropped .blocks-gallery-item a,
    .blocks-gallery-grid.is-cropped .blocks-gallery-item img,
    .wp-block-gallery.is-cropped .blocks-gallery-image a,
    .wp-block-gallery.is-cropped .blocks-gallery-image img,
    .wp-block-gallery.is-cropped .blocks-gallery-item a,
    .wp-block-gallery.is-cropped .blocks-gallery-item img {
      width: 100%
    }

    @supports ((position:-webkit-sticky) or (position:sticky)) {

      .blocks-gallery-grid.is-cropped .blocks-gallery-image a,
      .blocks-gallery-grid.is-cropped .blocks-gallery-image img,
      .blocks-gallery-grid.is-cropped .blocks-gallery-item a,
      .blocks-gallery-grid.is-cropped .blocks-gallery-item img,
      .wp-block-gallery.is-cropped .blocks-gallery-image a,
      .wp-block-gallery.is-cropped .blocks-gallery-image img,
      .wp-block-gallery.is-cropped .blocks-gallery-item a,
      .wp-block-gallery.is-cropped .blocks-gallery-item img {
        height: 100%;
        flex: 1;
        object-fit: cover
      }
    }

    .blocks-gallery-grid .blocks-gallery-image,
    .blocks-gallery-grid .blocks-gallery-item,
    .wp-block-gallery .blocks-gallery-image,
    .wp-block-gallery .blocks-gallery-item {
      width: calc(50% - 16px)
    }

    .blocks-gallery-grid .blocks-gallery-image:nth-of-type(2n),
    .blocks-gallery-grid .blocks-gallery-item:nth-of-type(2n),
    .wp-block-gallery .blocks-gallery-image:nth-of-type(2n),
    .wp-block-gallery .blocks-gallery-item:nth-of-type(2n) {
      margin-right: 0
    }

    .blocks-gallery-grid.columns-1 .blocks-gallery-image,
    .blocks-gallery-grid.columns-1 .blocks-gallery-item,
    .wp-block-gallery.columns-1 .blocks-gallery-image,
    .wp-block-gallery.columns-1 .blocks-gallery-item {
      width: 100%;
      margin-right: 0
    }

    @media (min-width:600px) {

      .blocks-gallery-grid.columns-3 .blocks-gallery-image,
      .blocks-gallery-grid.columns-3 .blocks-gallery-item,
      .wp-block-gallery.columns-3 .blocks-gallery-image,
      .wp-block-gallery.columns-3 .blocks-gallery-item {
        width: calc(33.33333% - 10.66667px);
        margin-right: 16px
      }

      .blocks-gallery-grid.columns-4 .blocks-gallery-image,
      .blocks-gallery-grid.columns-4 .blocks-gallery-item,
      .wp-block-gallery.columns-4 .blocks-gallery-image,
      .wp-block-gallery.columns-4 .blocks-gallery-item {
        width: calc(25% - 12px);
        margin-right: 16px
      }

      .blocks-gallery-grid.columns-5 .blocks-gallery-image,
      .blocks-gallery-grid.columns-5 .blocks-gallery-item,
      .wp-block-gallery.columns-5 .blocks-gallery-image,
      .wp-block-gallery.columns-5 .blocks-gallery-item {
        width: calc(20% - 12.8px);
        margin-right: 16px
      }

      .blocks-gallery-grid.columns-6 .blocks-gallery-image,
      .blocks-gallery-grid.columns-6 .blocks-gallery-item,
      .wp-block-gallery.columns-6 .blocks-gallery-image,
      .wp-block-gallery.columns-6 .blocks-gallery-item {
        width: calc(16.66667% - 13.33333px);
        margin-right: 16px
      }

      .blocks-gallery-grid.columns-7 .blocks-gallery-image,
      .blocks-gallery-grid.columns-7 .blocks-gallery-item,
      .wp-block-gallery.columns-7 .blocks-gallery-image,
      .wp-block-gallery.columns-7 .blocks-gallery-item {
        width: calc(14.28571% - 13.71429px);
        margin-right: 16px
      }

      .blocks-gallery-grid.columns-8 .blocks-gallery-image,
      .blocks-gallery-grid.columns-8 .blocks-gallery-item,
      .wp-block-gallery.columns-8 .blocks-gallery-image,
      .wp-block-gallery.columns-8 .blocks-gallery-item {
        width: calc(12.5% - 14px);
        margin-right: 16px
      }

      .blocks-gallery-grid.columns-1 .blocks-gallery-image:nth-of-type(1n),
      .blocks-gallery-grid.columns-1 .blocks-gallery-item:nth-of-type(1n),
      .wp-block-gallery.columns-1 .blocks-gallery-image:nth-of-type(1n),
      .wp-block-gallery.columns-1 .blocks-gallery-item:nth-of-type(1n) {
        margin-right: 0
      }

      .blocks-gallery-grid.columns-2 .blocks-gallery-image:nth-of-type(2n),
      .blocks-gallery-grid.columns-2 .blocks-gallery-item:nth-of-type(2n),
      .wp-block-gallery.columns-2 .blocks-gallery-image:nth-of-type(2n),
      .wp-block-gallery.columns-2 .blocks-gallery-item:nth-of-type(2n) {
        margin-right: 0
      }

      .blocks-gallery-grid.columns-3 .blocks-gallery-image:nth-of-type(3n),
      .blocks-gallery-grid.columns-3 .blocks-gallery-item:nth-of-type(3n),
      .wp-block-gallery.columns-3 .blocks-gallery-image:nth-of-type(3n),
      .wp-block-gallery.columns-3 .blocks-gallery-item:nth-of-type(3n) {
        margin-right: 0
      }

      .blocks-gallery-grid.columns-4 .blocks-gallery-image:nth-of-type(4n),
      .blocks-gallery-grid.columns-4 .blocks-gallery-item:nth-of-type(4n),
      .wp-block-gallery.columns-4 .blocks-gallery-image:nth-of-type(4n),
      .wp-block-gallery.columns-4 .blocks-gallery-item:nth-of-type(4n) {
        margin-right: 0
      }

      .blocks-gallery-grid.columns-5 .blocks-gallery-image:nth-of-type(5n),
      .blocks-gallery-grid.columns-5 .blocks-gallery-item:nth-of-type(5n),
      .wp-block-gallery.columns-5 .blocks-gallery-image:nth-of-type(5n),
      .wp-block-gallery.columns-5 .blocks-gallery-item:nth-of-type(5n) {
        margin-right: 0
      }

      .blocks-gallery-grid.columns-6 .blocks-gallery-image:nth-of-type(6n),
      .blocks-gallery-grid.columns-6 .blocks-gallery-item:nth-of-type(6n),
      .wp-block-gallery.columns-6 .blocks-gallery-image:nth-of-type(6n),
      .wp-block-gallery.columns-6 .blocks-gallery-item:nth-of-type(6n) {
        margin-right: 0
      }

      .blocks-gallery-grid.columns-7 .blocks-gallery-image:nth-of-type(7n),
      .blocks-gallery-grid.columns-7 .blocks-gallery-item:nth-of-type(7n),
      .wp-block-gallery.columns-7 .blocks-gallery-image:nth-of-type(7n),
      .wp-block-gallery.columns-7 .blocks-gallery-item:nth-of-type(7n) {
        margin-right: 0
      }

      .blocks-gallery-grid.columns-8 .blocks-gallery-image:nth-of-type(8n),
      .blocks-gallery-grid.columns-8 .blocks-gallery-item:nth-of-type(8n),
      .wp-block-gallery.columns-8 .blocks-gallery-image:nth-of-type(8n),
      .wp-block-gallery.columns-8 .blocks-gallery-item:nth-of-type(8n) {
        margin-right: 0
      }
    }

    .blocks-gallery-grid .blocks-gallery-image:last-child,
    .blocks-gallery-grid .blocks-gallery-item:last-child,
    .wp-block-gallery .blocks-gallery-image:last-child,
    .wp-block-gallery .blocks-gallery-item:last-child {
      margin-right: 0
    }

    .blocks-gallery-grid.alignleft,
    .blocks-gallery-grid.alignright,
    .wp-block-gallery.alignleft,
    .wp-block-gallery.alignright {
      max-width: 290px;
      width: 100%
    }

    .blocks-gallery-grid.aligncenter .blocks-gallery-item figure,
    .wp-block-gallery.aligncenter .blocks-gallery-item figure {
      justify-content: center
    }

    h1.has-background,
    h2.has-background,
    h3.has-background,
    h4.has-background,
    h5.has-background,
    h6.has-background {
      padding: 20px 38px
    }

    .wp-block-image {
      margin-bottom: 1em
    }

    .wp-block-image img {
      max-width: 100%
    }

    .wp-block-image.aligncenter {
      text-align: center
    }

    .wp-block-image.alignfull img,
    .wp-block-image.alignwide img {
      width: 100%
    }

    .wp-block-image .aligncenter,
    .wp-block-image .alignleft,
    .wp-block-image .alignright,
    .wp-block-image.is-resized {
      display: table
    }

    .wp-block-image .aligncenter>figcaption,
    .wp-block-image .alignleft>figcaption,
    .wp-block-image .alignright>figcaption,
    .wp-block-image.is-resized>figcaption {
      display: table-caption;
      caption-side: bottom
    }

    .wp-block-image .alignleft {
      float: left;
      margin: .5em 1em .5em 0
    }

    .wp-block-image .alignright {
      float: right;
      margin: .5em 0 .5em 1em
    }

    .wp-block-image .aligncenter {
      margin-left: auto;
      margin-right: auto
    }

    .wp-block-image figcaption {
      margin-top: .5em;
      margin-bottom: 1em
    }

    .is-style-circle-mask img,
    .is-style-rounded img {
      border-radius: 9999px
    }

    @supports ((-webkit-mask-image:none) or (mask-image:none)) or (-webkit-mask-image:none) {
      .is-style-circle-mask img {
        -webkit-mask-image: url('data:image/svg+xml;utf8,<svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><circle cx="50" cy="50" r="50"/></svg>');
        mask-image: url('data:image/svg+xml;utf8,<svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><circle cx="50" cy="50" r="50"/></svg>');
        mask-mode: alpha;
        -webkit-mask-repeat: no-repeat;
        mask-repeat: no-repeat;
        -webkit-mask-size: contain;
        mask-size: contain;
        -webkit-mask-position: center;
        mask-position: center;
        border-radius: 0
      }
    }

    .wp-block-latest-comments__comment {
      font-size: 15px;
      line-height: 1.1;
      list-style: none;
      margin-bottom: 1em
    }

    .has-avatars .wp-block-latest-comments__comment {
      min-height: 36px;
      list-style: none
    }

    .has-avatars .wp-block-latest-comments__comment .wp-block-latest-comments__comment-excerpt,
    .has-avatars .wp-block-latest-comments__comment .wp-block-latest-comments__comment-meta {
      margin-left: 52px
    }

    .has-dates .wp-block-latest-comments__comment,
    .has-excerpts .wp-block-latest-comments__comment {
      line-height: 1.5
    }

    .wp-block-latest-comments__comment-excerpt p {
      font-size: 14px;
      line-height: 1.8;
      margin: 5px 0 20px
    }

    .wp-block-latest-comments__comment-date {
      color: #8f98a1;
      display: block;
      font-size: 12px
    }

    .wp-block-latest-comments .avatar,
    .wp-block-latest-comments__comment-avatar {
      border-radius: 24px;
      display: block;
      float: left;
      height: 40px;
      margin-right: 12px;
      width: 40px
    }

    .wp-block-latest-posts.alignleft {
      margin-right: 2em
    }

    .wp-block-latest-posts.alignright {
      margin-left: 2em
    }

    .wp-block-latest-posts.wp-block-latest-posts__list {
      list-style: none
    }

    .wp-block-latest-posts.wp-block-latest-posts__list li {
      clear: both
    }

    .wp-block-latest-posts.is-grid {
      display: flex;
      flex-wrap: wrap;
      padding: 0
    }

    .wp-block-latest-posts.is-grid li {
      margin: 0 20px 20px 0;
      width: 100%
    }

    @media (min-width:600px) {
      .wp-block-latest-posts.columns-2 li {
        width: calc(50% - 20px)
      }

      .wp-block-latest-posts.columns-3 li {
        width: calc(33.33333% - 20px)
      }

      .wp-block-latest-posts.columns-4 li {
        width: calc(25% - 20px)
      }

      .wp-block-latest-posts.columns-5 li {
        width: calc(20% - 20px)
      }

      .wp-block-latest-posts.columns-6 li {
        width: calc(16.66667% - 20px)
      }
    }

    .wp-block-latest-posts__post-author,
    .wp-block-latest-posts__post-date {
      display: block;
      color: #6c7781;
      font-size: 13px
    }

    .wp-block-latest-posts__post-excerpt {
      margin-top: 8px;
      margin-bottom: 16px
    }

    .wp-block-latest-posts__featured-image img {
      height: auto;
      width: auto
    }

    .wp-block-latest-posts__featured-image.alignleft {
      margin-right: 1em
    }

    .wp-block-latest-posts__featured-image.alignright {
      margin-left: 1em
    }

    .wp-block-latest-posts__featured-image.aligncenter {
      margin-bottom: 1em;
      text-align: center
    }

    .edit-post-visual-editor .wp-block-latest-posts.is-grid li {
      margin-bottom: 20px
    }

    .wp-block-media-text {
      /*!rtl:begin:ignore*/
      direction: ltr;
      /*!rtl:end:ignore*/
      display: -ms-grid;
      display: grid;
      -ms-grid-columns: 50% 1fr;
      grid-template-columns: 50% 1fr;
      -ms-grid-rows: auto;
      grid-template-rows: auto
    }

    .wp-block-media-text.has-media-on-the-right {
      -ms-grid-columns: 1fr 50%;
      grid-template-columns: 1fr 50%
    }

    .wp-block-media-text.is-vertically-aligned-top .wp-block-media-text__content,
    .wp-block-media-text.is-vertically-aligned-top .wp-block-media-text__media {
      -ms-grid-row-align: start;
      align-self: start
    }

    .wp-block-media-text.is-vertically-aligned-center .wp-block-media-text__content,
    .wp-block-media-text.is-vertically-aligned-center .wp-block-media-text__media,
    .wp-block-media-text .wp-block-media-text__content,
    .wp-block-media-text .wp-block-media-text__media {
      -ms-grid-row-align: center;
      align-self: center
    }

    .wp-block-media-text.is-vertically-aligned-bottom .wp-block-media-text__content,
    .wp-block-media-text.is-vertically-aligned-bottom .wp-block-media-text__media {
      -ms-grid-row-align: end;
      align-self: end
    }

    .wp-block-media-text .wp-block-media-text__media {
      /*!rtl:begin:ignore*/
      -ms-grid-column: 1;
      grid-column: 1;
      -ms-grid-row: 1;
      grid-row: 1;
      /*!rtl:end:ignore*/
      margin: 0
    }

    .wp-block-media-text .wp-block-media-text__content {
      direction: ltr;
      /*!rtl:begin:ignore*/
      -ms-grid-column: 2;
      grid-column: 2;
      -ms-grid-row: 1;
      grid-row: 1;
      /*!rtl:end:ignore*/
      padding: 0 8%;
      word-break: break-word
    }

    .wp-block-media-text.has-media-on-the-right .wp-block-media-text__media {
      /*!rtl:begin:ignore*/
      -ms-grid-column: 2;
      grid-column: 2;
      -ms-grid-row: 1;
      grid-row: 1
        /*!rtl:end:ignore*/
    }

    .wp-block-media-text.has-media-on-the-right .wp-block-media-text__content {
      /*!rtl:begin:ignore*/
      -ms-grid-column: 1;
      grid-column: 1;
      -ms-grid-row: 1;
      grid-row: 1
        /*!rtl:end:ignore*/
    }

    .wp-block-media-text__media img,
    .wp-block-media-text__media video {
      max-width: unset;
      width: 100%;
      vertical-align: middle
    }

    .wp-block-media-text.is-image-fill figure.wp-block-media-text__media {
      height: 100%;
      min-height: 250px;
      background-size: cover
    }

    .wp-block-media-text.is-image-fill figure.wp-block-media-text__media>img {
      position: absolute;
      width: 1px;
      height: 1px;
      padding: 0;
      margin: -1px;
      overflow: hidden;
      clip: rect(0, 0, 0, 0);
      border: 0
    }

    @media (max-width:600px) {
      .wp-block-media-text.is-stacked-on-mobile {
        -ms-grid-columns: 100% !important;
        grid-template-columns: 100% !important
      }

      .wp-block-media-text.is-stacked-on-mobile .wp-block-media-text__media {
        -ms-grid-column: 1;
        grid-column: 1;
        -ms-grid-row: 1;
        grid-row: 1
      }

      .wp-block-media-text.is-stacked-on-mobile.has-media-on-the-right .wp-block-media-text__media,
      .wp-block-media-text.is-stacked-on-mobile .wp-block-media-text__content {
        -ms-grid-column: 1;
        grid-column: 1;
        -ms-grid-row: 2;
        grid-row: 2
      }

      .wp-block-media-text.is-stacked-on-mobile.has-media-on-the-right .wp-block-media-text__content {
        -ms-grid-column: 1;
        grid-column: 1;
        -ms-grid-row: 1;
        grid-row: 1
      }
    }

    .wp-block-navigation.is-style-light .wp-block-navigation-link:not(.has-text-color),
    .wp-block-navigation .wp-block-navigation-link:not(.has-text-color) {
      color: #1e1e1e
    }

    .wp-block-navigation.is-style-light:not(.has-background) .wp-block-navigation__container,
    .wp-block-navigation:not(.has-background) .wp-block-navigation__container {
      background-color: #fff
    }

    .wp-block-navigation.is-style-dark .wp-block-navigation-link:not(.has-text-color) {
      color: #fff
    }

    .wp-block-navigation.is-style-dark:not(.has-background) .wp-block-navigation__container {
      background-color: #1e1e1e
    }

    .items-justified-left>ul {
      justify-content: flex-start
    }

    .items-justified-center>ul {
      justify-content: center
    }

    .items-justified-right>ul {
      justify-content: flex-end
    }

    .wp-block-navigation-link {
      display: flex;
      align-items: center;
      position: relative;
      margin: 0
    }

    .wp-block-navigation-link .wp-block-navigation__container:empty {
      display: none
    }

    .wp-block-navigation__container {
      list-style: none;
      margin: 0;
      padding-left: 0;
      display: flex;
      flex-wrap: wrap
    }

    .is-vertical .wp-block-navigation__container {
      display: block
    }

    .has-child .wp-block-navigation__container {
      border: 1px solid rgba(0, 0, 0, .15);
      background-color: inherit;
      color: inherit;
      position: absolute;
      left: 0;
      top: 100%;
      width: fit-content;
      z-index: 1;
      opacity: 0;
      transition: opacity .1s linear;
      visibility: hidden
    }

    .has-child .wp-block-navigation__container>.wp-block-navigation-link>.wp-block-navigation-link__content {
      flex-grow: 1
    }

    .has-child .wp-block-navigation__container>.wp-block-navigation-link>.wp-block-navigation-link__submenu-icon {
      padding-right: 8px
    }

    @media (min-width:782px) {
      .has-child .wp-block-navigation__container {
        left: 24px
      }

      .has-child .wp-block-navigation__container .wp-block-navigation__container {
        left: 100%;
        top: -1px
      }

      .has-child .wp-block-navigation__container .wp-block-navigation__container:before {
        content: "";
        position: absolute;
        right: 100%;
        height: 100%;
        display: block;
        width: 8px;
        background: transparent
      }

      .has-child .wp-block-navigation__container .wp-block-navigation-link__submenu-icon svg {
        transform: rotate(0)
      }
    }

    .has-child:hover {
      cursor: pointer
    }

    .has-child:hover>.wp-block-navigation__container {
      visibility: visible;
      opacity: 1;
      display: flex;
      flex-direction: column
    }

    .has-child:focus-within {
      cursor: pointer
    }

    .has-child:focus-within>.wp-block-navigation__container {
      visibility: visible;
      opacity: 1;
      display: flex;
      flex-direction: column
    }

    .wp-block-navigation-link__content {
      text-decoration: none;
      padding: 8px 16px
    }

    .wp-block-navigation-link__content+.wp-block-navigation-link__content {
      padding-top: 0
    }

    .has-text-color .wp-block-navigation-link__content {
      color: inherit
    }

    .wp-block-navigation-link__label {
      font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Oxygen-Sans, Ubuntu, Cantarell, Helvetica Neue, sans-serif;
      word-break: normal;
      overflow-wrap: break-word
    }

    .wp-block-navigation-link__submenu-icon {
      height: inherit;
      padding: 6px 16px
    }

    .wp-block-navigation-link__submenu-icon svg {
      fill: currentColor
    }

    @media (min-width:782px) {
      .wp-block-navigation-link__submenu-icon svg {
        transform: rotate(90deg)
      }
    }

    .is-small-text {
      font-size: 14px
    }

    .is-regular-text {
      font-size: 16px
    }

    .is-large-text {
      font-size: 36px
    }

    .is-larger-text {
      font-size: 48px
    }

    .has-drop-cap:not(:focus):first-letter {
      float: left;
      font-size: 8.4em;
      line-height: .68;
      font-weight: 100;
      margin: .05em .1em 0 0;
      text-transform: uppercase;
      font-style: normal
    }

    p.has-background {
      padding: 20px 38px
    }

    p.has-text-color a {
      color: inherit
    }

    .wp-block-post-author {
      display: flex;
      flex-wrap: wrap;
      line-height: 1.5
    }

    .wp-block-post-author__byline {
      width: 100%;
      margin-top: 0;
      margin-bottom: 0;
      font-size: .5em
    }

    .wp-block-post-author__avatar {
      margin-right: 16px
    }

    .wp-block-post-author__bio {
      margin-bottom: 8px;
      font-size: .7em
    }

    .wp-block-post-author__content {
      flex-grow: 1;
      flex-basis: 0
    }

    .wp-block-post-author__name {
      font-weight: 700;
      margin: 0
    }

    .wp-block-pullquote {
      padding: 3em 0;
      margin-left: 0;
      margin-right: 0;
      text-align: center
    }

    .wp-block-pullquote.alignleft,
    .wp-block-pullquote.alignright {
      max-width: 290px
    }

    .wp-block-pullquote.alignleft p,
    .wp-block-pullquote.alignright p {
      font-size: 20px
    }

    .wp-block-pullquote p {
      font-size: 28px;
      line-height: 1.6
    }

    .wp-block-pullquote cite,
    .wp-block-pullquote footer {
      position: relative
    }

    .wp-block-pullquote .has-text-color a {
      color: inherit
    }

    .wp-block-pullquote:not(.is-style-solid-color) {
      background: none
    }

    .wp-block-pullquote.is-style-solid-color {
      border: none
    }

    .wp-block-pullquote.is-style-solid-color blockquote {
      margin-left: auto;
      margin-right: auto;
      text-align: left;
      max-width: 60%
    }

    .wp-block-pullquote.is-style-solid-color blockquote p {
      margin-top: 0;
      margin-bottom: 0;
      font-size: 32px
    }

    .wp-block-pullquote.is-style-solid-color blockquote cite {
      text-transform: none;
      font-style: normal
    }

    .wp-block-pullquote cite {
      color: inherit
    }

    .wp-block-quote.is-large,
    .wp-block-quote.is-style-large {
      margin: 0 0 16px;
      padding: 0 1em
    }

    .wp-block-quote.is-large p,
    .wp-block-quote.is-style-large p {
      font-size: 24px;
      font-style: italic;
      line-height: 1.6
    }

    .wp-block-quote.is-large cite,
    .wp-block-quote.is-large footer,
    .wp-block-quote.is-style-large cite,
    .wp-block-quote.is-style-large footer {
      font-size: 18px;
      text-align: right
    }

    .wp-block-rss.alignleft {
      margin-right: 2em
    }

    .wp-block-rss.alignright {
      margin-left: 2em
    }

    .wp-block-rss.is-grid {
      display: flex;
      flex-wrap: wrap;
      padding: 0;
      list-style: none
    }

    .wp-block-rss.is-grid li {
      margin: 0 16px 16px 0;
      width: 100%
    }

    @media (min-width:600px) {
      .wp-block-rss.columns-2 li {
        width: calc(50% - 16px)
      }

      .wp-block-rss.columns-3 li {
        width: calc(33.33333% - 16px)
      }

      .wp-block-rss.columns-4 li {
        width: calc(25% - 16px)
      }

      .wp-block-rss.columns-5 li {
        width: calc(20% - 16px)
      }

      .wp-block-rss.columns-6 li {
        width: calc(16.66667% - 16px)
      }
    }

    .wp-block-rss__item-author,
    .wp-block-rss__item-publish-date {
      display: block;
      color: #6c7781;
      font-size: 13px
    }

    .wp-block-search {
      display: flex;
      flex-wrap: wrap
    }

    .wp-block-search .wp-block-search__label {
      width: 100%
    }

    .wp-block-search .wp-block-search__input {
      flex-grow: 1;
      max-width: 360px
    }

    .wp-block-search .wp-block-search__button {
      margin-left: 10px
    }

    .wp-block-separator.is-style-wide {
      border-bottom-width: 1px
    }

    .wp-block-separator.is-style-dots {
      background: none !important;
      border: none;
      text-align: center;
      max-width: none;
      line-height: 1;
      height: auto
    }

    .wp-block-separator.is-style-dots:before {
      content: "\00b7 \00b7 \00b7";
      color: currentColor;
      font-size: 20px;
      letter-spacing: 2em;
      padding-left: 2em;
      font-family: serif
    }

    .wp-block-social-links {
      display: flex;
      justify-content: flex-start;
      padding-left: 0;
      padding-right: 0;
      margin-left: 0
    }

    .wp-block-social-links .wp-social-link a,
    .wp-block-social-links .wp-social-link a:hover {
      text-decoration: none;
      border-bottom: 0;
      box-shadow: none
    }

    .wp-social-link {
      display: block;
      width: 36px;
      height: 36px;
      border-radius: 36px;
      margin-right: 8px;
      transition: transform .1s ease
    }

    @media (prefers-reduced-motion:reduce) {
      .wp-social-link {
        transition-duration: 0s
      }
    }

    .wp-social-link a {
      padding: 6px;
      display: block;
      line-height: 0;
      transition: transform .1s ease
    }

    .wp-social-link a,
    .wp-social-link a:active,
    .wp-social-link a:hover,
    .wp-social-link a:visited,
    .wp-social-link svg {
      color: currentColor;
      fill: currentColor
    }

    .wp-social-link:hover {
      transform: scale(1.1)
    }

    .wp-block-social-links.aligncenter {
      justify-content: center;
      display: flex
    }

    .wp-block-social-links:not(.is-style-logos-only) .wp-social-link {
      background-color: #f0f0f0;
      color: #444
    }

    .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-amazon {
      background-color: #f90;
      color: #fff
    }

    .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-bandcamp {
      background-color: #1ea0c3;
      color: #fff
    }

    .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-behance {
      background-color: #0757fe;
      color: #fff
    }

    .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-codepen {
      background-color: #1e1f26;
      color: #fff
    }

    .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-deviantart {
      background-color: #02e49b;
      color: #fff
    }

    .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-dribbble {
      background-color: #e94c89;
      color: #fff
    }

    .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-dropbox {
      background-color: #4280ff;
      color: #fff
    }

    .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-etsy {
      background-color: #f45800;
      color: #fff
    }

    .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-facebook {
      background-color: #1778f2;
      color: #fff
    }

    .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-fivehundredpx {
      background-color: #000;
      color: #fff
    }

    .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-flickr {
      background-color: #0461dd;
      color: #fff
    }

    .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-foursquare {
      background-color: #e65678;
      color: #fff
    }

    .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-github {
      background-color: #24292d;
      color: #fff
    }

    .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-goodreads {
      background-color: #eceadd;
      color: #382110
    }

    .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-google {
      background-color: #ea4434;
      color: #fff
    }

    .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-instagram {
      background-color: #f00075;
      color: #fff
    }

    .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-lastfm {
      background-color: #e21b24;
      color: #fff
    }

    .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-linkedin {
      background-color: #0d66c2;
      color: #fff
    }

    .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-mastodon {
      background-color: #3288d4;
      color: #fff
    }

    .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-medium {
      background-color: #02ab6c;
      color: #fff
    }

    .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-meetup {
      background-color: #f6405f;
      color: #fff
    }

    .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-pinterest {
      background-color: #e60122;
      color: #fff
    }

    .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-pocket {
      background-color: #ef4155;
      color: #fff
    }

    .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-reddit {
      background-color: #fe4500;
      color: #fff
    }

    .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-skype {
      background-color: #0478d7;
      color: #fff
    }

    .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-snapchat {
      background-color: #fefc00;
      color: #fff;
      stroke: #000
    }

    .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-soundcloud {
      background-color: #ff5600;
      color: #fff
    }

    .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-spotify {
      background-color: #1bd760;
      color: #fff
    }

    .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-tumblr {
      background-color: #011835;
      color: #fff
    }

    .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-twitch {
      background-color: #6440a4;
      color: #fff
    }

    .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-twitter {
      background-color: #1da1f2;
      color: #fff
    }

    .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-vimeo {
      background-color: #1eb7ea;
      color: #fff
    }

    .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-vk {
      background-color: #4680c2;
      color: #fff
    }

    .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-wordpress {
      background-color: #3499cd;
      color: #fff
    }

    .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-yelp {
      background-color: #d32422;
      color: #fff
    }

    .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-youtube {
      background-color: red;
      color: #fff
    }

    .wp-block-social-links.is-style-logos-only .wp-social-link {
      background: none;
      padding: 4px
    }

    .wp-block-social-links.is-style-logos-only .wp-social-link svg {
      width: 28px;
      height: 28px
    }

    .wp-block-social-links.is-style-logos-only .wp-social-link-amazon {
      color: #f90
    }

    .wp-block-social-links.is-style-logos-only .wp-social-link-bandcamp {
      color: #1ea0c3
    }

    .wp-block-social-links.is-style-logos-only .wp-social-link-behance {
      color: #0757fe
    }

    .wp-block-social-links.is-style-logos-only .wp-social-link-codepen {
      color: #1e1f26
    }

    .wp-block-social-links.is-style-logos-only .wp-social-link-deviantart {
      color: #02e49b
    }

    .wp-block-social-links.is-style-logos-only .wp-social-link-dribbble {
      color: #e94c89
    }

    .wp-block-social-links.is-style-logos-only .wp-social-link-dropbox {
      color: #4280ff
    }

    .wp-block-social-links.is-style-logos-only .wp-social-link-etsy {
      color: #f45800
    }

    .wp-block-social-links.is-style-logos-only .wp-social-link-facebook {
      color: #1778f2
    }

    .wp-block-social-links.is-style-logos-only .wp-social-link-fivehundredpx {
      color: #000
    }

    .wp-block-social-links.is-style-logos-only .wp-social-link-flickr {
      color: #0461dd
    }

    .wp-block-social-links.is-style-logos-only .wp-social-link-foursquare {
      color: #e65678
    }

    .wp-block-social-links.is-style-logos-only .wp-social-link-github {
      color: #24292d
    }

    .wp-block-social-links.is-style-logos-only .wp-social-link-goodreads {
      color: #382110
    }

    .wp-block-social-links.is-style-logos-only .wp-social-link-google {
      color: #ea4434
    }

    .wp-block-social-links.is-style-logos-only .wp-social-link-instagram {
      color: #f00075
    }

    .wp-block-social-links.is-style-logos-only .wp-social-link-lastfm {
      color: #e21b24
    }

    .wp-block-social-links.is-style-logos-only .wp-social-link-linkedin {
      color: #0d66c2
    }

    .wp-block-social-links.is-style-logos-only .wp-social-link-mastodon {
      color: #3288d4
    }

    .wp-block-social-links.is-style-logos-only .wp-social-link-medium {
      color: #02ab6c
    }

    .wp-block-social-links.is-style-logos-only .wp-social-link-meetup {
      color: #f6405f
    }

    .wp-block-social-links.is-style-logos-only .wp-social-link-pinterest {
      color: #e60122
    }

    .wp-block-social-links.is-style-logos-only .wp-social-link-pocket {
      color: #ef4155
    }

    .wp-block-social-links.is-style-logos-only .wp-social-link-reddit {
      color: #fe4500
    }

    .wp-block-social-links.is-style-logos-only .wp-social-link-skype {
      color: #0478d7
    }

    .wp-block-social-links.is-style-logos-only .wp-social-link-snapchat {
      color: #fff;
      stroke: #000
    }

    .wp-block-social-links.is-style-logos-only .wp-social-link-soundcloud {
      color: #ff5600
    }

    .wp-block-social-links.is-style-logos-only .wp-social-link-spotify {
      color: #1bd760
    }

    .wp-block-social-links.is-style-logos-only .wp-social-link-tumblr {
      color: #011835
    }

    .wp-block-social-links.is-style-logos-only .wp-social-link-twitch {
      color: #6440a4
    }

    .wp-block-social-links.is-style-logos-only .wp-social-link-twitter {
      color: #1da1f2
    }

    .wp-block-social-links.is-style-logos-only .wp-social-link-vimeo {
      color: #1eb7ea
    }

    .wp-block-social-links.is-style-logos-only .wp-social-link-vk {
      color: #4680c2
    }

    .wp-block-social-links.is-style-logos-only .wp-social-link-wordpress {
      color: #3499cd
    }

    .wp-block-social-links.is-style-logos-only .wp-social-link-yelp {
      background-color: #d32422;
      color: #fff
    }

    .wp-block-social-links.is-style-logos-only .wp-social-link-youtube {
      color: red
    }

    .wp-block-social-links.is-style-pill-shape .wp-social-link {
      width: auto
    }

    .wp-block-social-links.is-style-pill-shape .wp-social-link a {
      padding-left: 16px;
      padding-right: 16px
    }

    .wp-block-spacer {
      clear: both
    }

    p.wp-block-subhead {
      font-size: 1.1em;
      font-style: italic;
      opacity: .75
    }

    .wp-block-table {
      overflow-x: auto
    }

    .wp-block-table table {
      width: 100%
    }

    .wp-block-table .has-fixed-layout {
      table-layout: fixed;
      width: 100%
    }

    .wp-block-table .has-fixed-layout td,
    .wp-block-table .has-fixed-layout th {
      word-break: break-word
    }

    .wp-block-table.aligncenter,
    .wp-block-table.alignleft,
    .wp-block-table.alignright {
      display: table;
      width: auto
    }

    .wp-block-table.aligncenter td,
    .wp-block-table.aligncenter th,
    .wp-block-table.alignleft td,
    .wp-block-table.alignleft th,
    .wp-block-table.alignright td,
    .wp-block-table.alignright th {
      word-break: break-word
    }

    .wp-block-table .has-subtle-light-gray-background-color {
      background-color: #f3f4f5
    }

    .wp-block-table .has-subtle-pale-green-background-color {
      background-color: #e9fbe5
    }

    .wp-block-table .has-subtle-pale-blue-background-color {
      background-color: #e7f5fe
    }

    .wp-block-table .has-subtle-pale-pink-background-color {
      background-color: #fcf0ef
    }

    .wp-block-table.is-style-stripes {
      border-spacing: 0;
      border-collapse: inherit;
      background-color: transparent;
      border-bottom: 1px solid #f0f0f0
    }

    .wp-block-table.is-style-stripes tbody tr:nth-child(odd) {
      background-color: #f0f0f0
    }

    .wp-block-table.is-style-stripes.has-subtle-light-gray-background-color tbody tr:nth-child(odd) {
      background-color: #f3f4f5
    }

    .wp-block-table.is-style-stripes.has-subtle-pale-green-background-color tbody tr:nth-child(odd) {
      background-color: #e9fbe5
    }

    .wp-block-table.is-style-stripes.has-subtle-pale-blue-background-color tbody tr:nth-child(odd) {
      background-color: #e7f5fe
    }

    .wp-block-table.is-style-stripes.has-subtle-pale-pink-background-color tbody tr:nth-child(odd) {
      background-color: #fcf0ef
    }

    .wp-block-table.is-style-stripes td,
    .wp-block-table.is-style-stripes th {
      border-color: transparent
    }

    .wp-block-text-columns,
    .wp-block-text-columns.aligncenter {
      display: flex
    }

    .wp-block-text-columns .wp-block-column {
      margin: 0 16px;
      padding: 0
    }

    .wp-block-text-columns .wp-block-column:first-child {
      margin-left: 0
    }

    .wp-block-text-columns .wp-block-column:last-child {
      margin-right: 0
    }

    .wp-block-text-columns.columns-2 .wp-block-column {
      width: 50%
    }

    .wp-block-text-columns.columns-3 .wp-block-column {
      width: 33.33333%
    }

    .wp-block-text-columns.columns-4 .wp-block-column {
      width: 25%
    }

    .wp-block-video {
      margin-left: 0;
      margin-right: 0
    }

    .wp-block-video video {
      max-width: 100%
    }

    @supports ((position:-webkit-sticky) or (position:sticky)) {
      .wp-block-video [poster] {
        object-fit: cover
      }
    }

    .wp-block-video.aligncenter {
      text-align: center
    }

    .wp-block-video figcaption {
      margin-top: .5em;
      margin-bottom: 1em
    }

    :root .editor-styles-wrapper .has-pale-pink-background-color,
    :root .has-pale-pink-background-color {
      background-color: #f78da7
    }

    :root .editor-styles-wrapper .has-vivid-red-background-color,
    :root .has-vivid-red-background-color {
      background-color: #cf2e2e
    }

    :root .editor-styles-wrapper .has-luminous-vivid-orange-background-color,
    :root .has-luminous-vivid-orange-background-color {
      background-color: #ff6900
    }

    :root .editor-styles-wrapper .has-luminous-vivid-amber-background-color,
    :root .has-luminous-vivid-amber-background-color {
      background-color: #fcb900
    }

    :root .editor-styles-wrapper .has-light-green-cyan-background-color,
    :root .has-light-green-cyan-background-color {
      background-color: #7bdcb5
    }

    :root .editor-styles-wrapper .has-vivid-green-cyan-background-color,
    :root .has-vivid-green-cyan-background-color {
      background-color: #00d084
    }

    :root .editor-styles-wrapper .has-pale-cyan-blue-background-color,
    :root .has-pale-cyan-blue-background-color {
      background-color: #8ed1fc
    }

    :root .editor-styles-wrapper .has-vivid-cyan-blue-background-color,
    :root .has-vivid-cyan-blue-background-color {
      background-color: #0693e3
    }

    :root .editor-styles-wrapper .has-vivid-purple-background-color,
    :root .has-vivid-purple-background-color {
      background-color: #9b51e0
    }

    :root .editor-styles-wrapper .has-white-background-color,
    :root .has-white-background-color {
      background-color: #fff
    }

    :root .editor-styles-wrapper .has-very-light-gray-background-color,
    :root .has-very-light-gray-background-color {
      background-color: #eee
    }

    :root .editor-styles-wrapper .has-cyan-bluish-gray-background-color,
    :root .has-cyan-bluish-gray-background-color {
      background-color: #abb8c3
    }

    :root .editor-styles-wrapper .has-very-dark-gray-background-color,
    :root .has-very-dark-gray-background-color {
      background-color: #313131
    }

    :root .editor-styles-wrapper .has-black-background-color,
    :root .has-black-background-color {
      background-color: #000
    }

    :root .editor-styles-wrapper .has-pale-pink-color,
    :root .has-pale-pink-color {
      color: #f78da7
    }

    :root .editor-styles-wrapper .has-vivid-red-color,
    :root .has-vivid-red-color {
      color: #cf2e2e
    }

    :root .editor-styles-wrapper .has-luminous-vivid-orange-color,
    :root .has-luminous-vivid-orange-color {
      color: #ff6900
    }

    :root .editor-styles-wrapper .has-luminous-vivid-amber-color,
    :root .has-luminous-vivid-amber-color {
      color: #fcb900
    }

    :root .editor-styles-wrapper .has-light-green-cyan-color,
    :root .has-light-green-cyan-color {
      color: #7bdcb5
    }

    :root .editor-styles-wrapper .has-vivid-green-cyan-color,
    :root .has-vivid-green-cyan-color {
      color: #00d084
    }

    :root .editor-styles-wrapper .has-pale-cyan-blue-color,
    :root .has-pale-cyan-blue-color {
      color: #8ed1fc
    }

    :root .editor-styles-wrapper .has-vivid-cyan-blue-color,
    :root .has-vivid-cyan-blue-color {
      color: #0693e3
    }

    :root .editor-styles-wrapper .has-vivid-purple-color,
    :root .has-vivid-purple-color {
      color: #9b51e0
    }

    :root .editor-styles-wrapper .has-white-color,
    :root .has-white-color {
      color: #fff
    }

    :root .editor-styles-wrapper .has-very-light-gray-color,
    :root .has-very-light-gray-color {
      color: #eee
    }

    :root .editor-styles-wrapper .has-cyan-bluish-gray-color,
    :root .has-cyan-bluish-gray-color {
      color: #abb8c3
    }

    :root .editor-styles-wrapper .has-very-dark-gray-color,
    :root .has-very-dark-gray-color {
      color: #313131
    }

    :root .editor-styles-wrapper .has-black-color,
    :root .has-black-color {
      color: #000
    }

    :root .editor-styles-wrapper .has-vivid-cyan-blue-to-vivid-purple-gradient-background,
    :root .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
      background: linear-gradient(135deg, #0693e3, #9b51e0)
    }

    :root .editor-styles-wrapper .has-vivid-green-cyan-to-vivid-cyan-blue-gradient-background,
    :root .has-vivid-green-cyan-to-vivid-cyan-blue-gradient-background {
      background: linear-gradient(135deg, #00d084, #0693e3)
    }

    :root .editor-styles-wrapper .has-light-green-cyan-to-vivid-green-cyan-gradient-background,
    :root .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
      background: linear-gradient(135deg, #7adcb4, #00d082)
    }

    :root .editor-styles-wrapper .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background,
    :root .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
      background: linear-gradient(135deg, #fcb900, #ff6900)
    }

    :root .editor-styles-wrapper .has-luminous-vivid-orange-to-vivid-red-gradient-background,
    :root .has-luminous-vivid-orange-to-vivid-red-gradient-background {
      background: linear-gradient(135deg, #ff6900, #cf2e2e)
    }

    :root .editor-styles-wrapper .has-very-light-gray-to-cyan-bluish-gray-gradient-background,
    :root .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
      background: linear-gradient(135deg, #eee, #a9b8c3)
    }

    :root .editor-styles-wrapper .has-cool-to-warm-spectrum-gradient-background,
    :root .has-cool-to-warm-spectrum-gradient-background {
      background: linear-gradient(135deg, #4aeadc, #9778d1 20%, #cf2aba 40%, #ee2c82 60%, #fb6962 80%, #fef84c)
    }

    :root .editor-styles-wrapper .has-blush-light-purple-gradient-background,
    :root .has-blush-light-purple-gradient-background {
      background: linear-gradient(135deg, #ffceec, #9896f0)
    }

    :root .editor-styles-wrapper .has-blush-bordeaux-gradient-background,
    :root .has-blush-bordeaux-gradient-background {
      background: linear-gradient(135deg, #fecda5, #fe2d2d 50%, #6b003e)
    }

    :root .editor-styles-wrapper .has-purple-crush-gradient-background,
    :root .has-purple-crush-gradient-background {
      background: linear-gradient(135deg, #34e2e4, #4721fb 50%, #ab1dfe)
    }

    :root .editor-styles-wrapper .has-luminous-dusk-gradient-background,
    :root .has-luminous-dusk-gradient-background {
      background: linear-gradient(135deg, #ffcb70, #c751c0 50%, #4158d0)
    }

    :root .editor-styles-wrapper .has-hazy-dawn-gradient-background,
    :root .has-hazy-dawn-gradient-background {
      background: linear-gradient(135deg, #faaca8, #dad0ec)
    }

    :root .editor-styles-wrapper .has-pale-ocean-gradient-background,
    :root .has-pale-ocean-gradient-background {
      background: linear-gradient(135deg, #fff5cb, #b6e3d4 50%, #33a7b5)
    }

    :root .editor-styles-wrapper .has-electric-grass-gradient-background,
    :root .has-electric-grass-gradient-background {
      background: linear-gradient(135deg, #caf880, #71ce7e)
    }

    :root .editor-styles-wrapper .has-subdued-olive-gradient-background,
    :root .has-subdued-olive-gradient-background {
      background: linear-gradient(135deg, #fafae1, #67a671)
    }

    :root .editor-styles-wrapper .has-atomic-cream-gradient-background,
    :root .has-atomic-cream-gradient-background {
      background: linear-gradient(135deg, #fdd79a, #004a59)
    }

    :root .editor-styles-wrapper .has-nightshade-gradient-background,
    :root .has-nightshade-gradient-background {
      background: linear-gradient(135deg, #330968, #31cdcf)
    }

    :root .editor-styles-wrapper .has-midnight-gradient-background,
    :root .has-midnight-gradient-background {
      background: linear-gradient(135deg, #020381, #2874fc)
    }

    :root .editor-styles-wrapper .has-link-color a,
    :root .has-link-color a {
      color: #00e;
      color: var(--wp--style--color--link, #00e)
    }

    .editor-styles-wrapper .has-small-font-size,
    .has-small-font-size {
      font-size: 13px
    }

    .editor-styles-wrapper .has-normal-font-size,
    .editor-styles-wrapper .has-regular-font-size,
    .has-normal-font-size,
    .has-regular-font-size {
      font-size: 16px
    }

    .editor-styles-wrapper .has-medium-font-size,
    .has-medium-font-size {
      font-size: 20px
    }

    .editor-styles-wrapper .has-large-font-size,
    .has-large-font-size {
      font-size: 36px
    }

    .editor-styles-wrapper .has-huge-font-size,
    .editor-styles-wrapper .has-larger-font-size,
    .has-huge-font-size,
    .has-larger-font-size {
      font-size: 42px
    }

    .has-text-align-center {
      text-align: center
    }

    .has-text-align-left {
      text-align: left
    }

    .has-text-align-right {
      text-align: right
    }

    #end-resizable-editor-section {
      display: none
    }

    .aligncenter {
      clear: both
    }

    html,
    body {
      border: none;
      margin: 0;
      padding: 0
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    p,
    blockquote,
    address,
    big,
    cite,
    code,
    em,
    font,
    img,
    small,
    strike,
    sub,
    sup,
    li,
    ol,
    ul,
    fieldset,
    form,
    label,
    legend,
    button,
    table,
    caption,
    tr,
    th,
    td {
      border: none;
      font-size: inherit;
      line-height: inherit;
      margin: 0;
      padding: 0;
      text-align: inherit
    }

    blockquote:before,
    blockquote:after {
      content: ""
    }

    html {
      font-size: 62.5%;
      scroll-behavior: smooth
    }

    @media (prefers-reduced-motion:reduce) {
      html {
        scroll-behavior: auto
      }
    }

    body {
      background: #f5efe0;
      box-sizing: border-box;
      color: #000;
      font-family: -apple-system, BlinkMacSystemFont, "Helvetica Neue", Helvetica, sans-serif;
      font-size: 1.8rem;
      letter-spacing: -.015em;
      text-align: left
    }

    @supports (font-variation-settings:normal) {
      body {
        font-family: "Inter var", -apple-system, BlinkMacSystemFont, "Helvetica Neue", Helvetica, sans-serif
      }
    }

    *,
    *:before,
    *:after {
      box-sizing: inherit;
      -webkit-font-smoothing: antialiased;
      word-break: break-word;
      word-wrap: break-word
    }

    #site-content {
      overflow: hidden
    }

    .group:after,
    .entry-content:after {
      clear: both;
      content: "";
      display: block
    }

    a,
    path {
      transition: all .15s linear
    }

    .screen-reader-text {
      border: 0;
      clip: rect(1px, 1px, 1px, 1px);
      -webkit-clip-path: inset(50%);
      clip-path: inset(50%);
      height: 1px;
      margin: -1px;
      overflow: hidden;
      padding: 0;
      position: absolute !important;
      width: 1px;
      word-wrap: normal !important;
      word-break: normal
    }

    .screen-reader-text:focus {
      background-color: #f1f1f1;
      border-radius: 3px;
      box-shadow: 0 0 2px 2px rgba(0, 0, 0, .6);
      clip: auto !important;
      -webkit-clip-path: none;
      clip-path: none;
      color: #21759b;
      display: block;
      font-size: .875rem;
      font-weight: 700;
      height: auto;
      right: 5px;
      line-height: normal;
      padding: 15px 23px 14px;
      text-decoration: none;
      top: 5px;
      width: auto;
      z-index: 100000
    }

    .skip-link {
      left: -9999rem;
      top: 2.5rem;
      z-index: 999999999;
      text-decoration: underline
    }

    .skip-link:focus {
      display: block;
      left: 6px;
      top: 7px;
      font-size: 14px;
      font-weight: 600;
      text-decoration: none;
      line-height: normal;
      padding: 15px 23px 14px;
      z-index: 100000;
      right: auto
    }

    @font-face {
      font-family: NonBreakingSpaceOverride;
      src: url(data:application/font-woff2;charset=utf-8;base64,d09GMgABAAAAAAMoAA0AAAAACDQAAALTAAEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP0ZGVE0cGh4GYACCahEICjx3CywAATYCJANUBCAFhiEHgWwbXQfILgpsY+rQRRARwyAs6uL7pxzYhxEE+32b3aeHmifR6tklkS9hiZA0ewkqGRJE+H7/+6378ASViK/PGeavqJyOzsceKi1s3BCiQsiOdn1r/RBgIJYEgCUhbm/8/8/h4saPssnTNkkiWUBrTRtjmQSajw3Ui3pZ3LYDPD+XG2C3JA/yKAS8/rU5eNfuGqRf4eNNgV4YAlIIgxglEkWe6FYpq10+wi3g+/nUgvgPFczNrz/RsTgVm/zfbPuHZlsuQECxuyqBcQwKFBjFgKO8AqP4bAN9tFJtnM9xPcbNjeXS/x1wY/xU52f5W/X1+9cnH4YwKIaoRRAkUkj/YlAAeF/624foiIDBgBmgQBeGAyhBljUPZUm/l2dTvmpqcBDUOHdbPZWd8JsBAsGr4w8/EDn82/bUPx4eh0YNrQTBuHO2FjQEAGBwK0DeI37DpQVqdERS4gZBhpeUhWCfLFz7J99aEBgsJCHvUGAdAPp4IADDCAPCEFMGpMZ9AQpTfQtQGhLbGVBZFV8BaqNyP68oTZgHNj3M8kBPfXTTC9t90UuzYhy9ciH0grVlOcqyCytisvbsERsEYztiznR0WCrmTksJwbSNK6fd1Rvr25I9oLvctUoEbNOmXJbqgYgPXEHJ82IUsrCnpkxh23F1rfZ2zcRnJYoXtauB3VTFkFXQg3uoZYD5qE0kdjDtoDoF1h2bulGmev5HbYhbrjtohQSRI4aNOkffIcT+d3v6atpaYh3JvPoQsztCcqvaBkppDSPcQ3bw3KaCBo1f5CJWTZEgW3LjLofYg51MaVezrx8xZitYbQ9KYeoRaqQdVLwSEfrKXLK1otCWOKNdR/YwYAfon5Yk8O2MJfSD10dPGA5PIJJQMkah0ugMJiv6x4Dm7LEa8xnrRGGGLAg4sAlbsA07sAt76DOsXKO3hIjtIlpnnFrt1qW4kh6NhS83P/6HB/fl1SMAAA==) format("woff2"), url(data:application/font-woff;charset=utf-8;base64,d09GRgABAAAAAAUQAA0AAAAACDQAAQAAAAAAAAAAAAAAAAAAAAAAAAAAAABGRlRNAAAE9AAAABwAAAAchf5yU0dERUYAAATYAAAAHAAAAB4AJwAbT1MvMgAAAaAAAABJAAAAYJAcgU5jbWFwAAACIAAAAF4AAAFqUUxBZ2dhc3AAAATQAAAACAAAAAgAAAAQZ2x5ZgAAApAAAAAyAAAAPL0n8y9oZWFkAAABMAAAADAAAAA2Fi93Z2hoZWEAAAFgAAAAHQAAACQOSgWaaG10eAAAAewAAAAzAAAAVC7TAQBsb2NhAAACgAAAABAAAAAsAOQBAm1heHAAAAGAAAAAHQAAACAAWQALbmFtZQAAAsQAAAF6AAADIYvD/Adwb3N0AAAEQAAAAI4AAADsapk2o3jaY2BkYGAA4ov5mwzj+W2+MnCzXwCKMNzgCBSB0LfbQDQ7AxuI4mBgAlEAFKQIRHjaY2BkYGD3+NvCwMDBAALsDAyMDKhAFAA3+wH3AAAAeNpjYGRgYBBl4GBgYgABEMnIABJzAPMZAAVmAGUAAAB42mNgZlJhnMDAysDCKsKygYGBYRqEZtrDYMT4D8gHSmEHjgUFOQwODAqqf9g9/rYwMLB7MNUAhRlBcsxBrMlASoGBEQAj8QtyAAAAeNrjYGBkAAGmWQwMjO8gmBnIZ2NA0ExAzNjAAFYJVn0ASBsD6VAIDZb7AtELAgANIgb9AHjaY2BgYGaAYBkGRgYQSAHyGMF8FgYPIM3HwMHAxMDGoMCwQIFLQV8hXvXP//9AcRCfAcb///h/ygPW+w/vb7olBjUHCTCyMcAFGZmABBO6AogThgZgIUsXAEDcEzcAAHjaY2BgECMCyoEgACZaAed42mNgYmRgYGBnYGNgYAZSDJqMgorCgoqCjECRXwwNrCAKSP5mAAFGBiRgyAAAi/YFBQAAeNqtkc1OwkAUhU/5M25cEhcsZick0AwlBJq6MWwgJkAgYV/KAA2lJeUn+hY+gktXvpKv4dLTMqKycGHsTZNv7px7z50ZAFd4hYHjdw1Ls4EiHjVncIFnzVnc4F1zDkWjrzmPW+NNcwGlzIRKI3fJlUyrEjZQxb3mDH2fNGfRx4vmHKqG0JzHg6E0F9DOlFBGBxUI1GEzLNT4S0aLuTtsGAEUuYcQHkyg3KmIum1bNUvKlrjbbAIleqHHnS4iSudpQcySMYtdFiXlAxzSbAwfMxK6kZoHKhbjjespMTioOPZnzI+4ucCeTVyKMVKLfeAS6vSWaTinuZwzyy/Dc7vaed+6KaV0kukdPUk6yOcctZPvvxxqksq2lEW8RvHjMEO2FCl/zy6p3NEm0R9OFSafJdldc4QVeyaaObMBO0/5cCaa6d9Ggyubxire+lEojscdjoWUR1xGOy8KD8mG2ZLO2l2paDc3A39qmU2z2W5YNv5+u79e6QfGJY/hAAB42m3NywrCMBQE0DupWp/1AYI7/6DEaLQu66Mrd35BKUWKJSlFv1+rue4cGM7shgR981qSon+ZNwUJ8iDgoYU2OvDRRQ99DDDECAHGmGCKmf80hZSx/Kik/LliFbtmN6xmt+yOjdg9GztV4tROnRwX/Bsaaw51nt4Lc7tWaZYHp/MlzKx51LZs5htNri+2AAAAAQAB//8AD3jaY2BkYGDgAWIxIGZiYARCESBmAfMYAAR6AEMAAAABAAAAANXtRbgAAAAA2AhRFAAAAADYCNuG) format("woff")
    }

    @font-face {
      font-family: "Inter var";
      font-weight: 100 900;
      font-style: normal;
      font-display: swap;
      src: url(//congreso.relep.org/wp-content/themes/twentytwenty/./assets/fonts/inter/Inter-upright-var.woff2) format("woff2")
    }

    @font-face {
      font-family: "Inter var";
      font-weight: 100 900;
      font-style: italic;
      font-display: swap;
      src: url(//congreso.relep.org/wp-content/themes/twentytwenty/./assets/fonts/inter/Inter-italic-var.woff2) format("woff2")
    }

    @media (prefers-reduced-motion:reduce) {
      * {
        animation-duration: 0s !important;
        transition-duration: 0s !important
      }
    }

    main {
      display: block
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    .faux-heading {
      font-feature-settings: "lnum";
      font-variant-numeric: lining-nums;
      font-weight: 700;
      letter-spacing: -.0415625em;
      line-height: 1.25;
      margin: 3.5rem 0 2rem
    }

    h1,
    .heading-size-1 {
      font-size: 3.6rem;
      font-weight: 800;
      line-height: 1.138888889
    }

    h2,
    .heading-size-2 {
      font-size: 3.2rem
    }

    h3,
    .heading-size-3 {
      font-size: 2.8rem
    }

    h4,
    .heading-size-4 {
      font-size: 2.4rem
    }

    h5,
    .heading-size-5 {
      font-size: 2.1rem
    }

    h6,
    .heading-size-6 {
      font-size: 1.6rem;
      letter-spacing: .03125em;
      text-transform: uppercase
    }

    p {
      line-height: 1.5;
      margin: 0 0 1em
    }

    em,
    i,
    q,
    dfn {
      font-style: italic
    }

    em em,
    em i,
    i em,
    i i,
    cite em,
    cite i {
      font-weight: bolder
    }

    big {
      font-size: 1.2em
    }

    small {
      font-size: .75em
    }

    b,
    strong {
      font-weight: 700
    }

    ins {
      text-decoration: underline
    }

    sub,
    sup {
      font-size: 75%;
      line-height: 0;
      position: relative;
      vertical-align: baseline
    }

    sup {
      top: -.5em
    }

    sub {
      bottom: -.25em
    }

    abbr,
    acronym {
      cursor: help
    }

    address {
      line-height: 1.5;
      margin: 0 0 2rem
    }

    hr {
      border-style: solid;
      border-width: .1rem 0 0;
      border-color: #dcd7ca;
      margin: 4rem 0
    }

    .entry-content hr,
    hr.styled-separator {
      background: linear-gradient(to left, currentColor calc(50% - 16px), transparent calc(50% - 16px), transparent calc(50% + 16px), currentColor calc(50% + 16px));
      background-color: transparent !important;
      border: none;
      height: .1rem;
      overflow: visible;
      position: relative
    }

    .entry-content hr:not(.has-background),
    hr.styled-separator {
      color: #6d6d6d
    }

    .entry-content hr:before,
    .entry-content hr:after,
    hr.styled-separator:before,
    hr.styled-separator:after {
      background: currentColor;
      content: "";
      display: block;
      height: 1.6rem;
      position: absolute;
      top: calc(50% - .8rem);
      transform: rotate(22.5deg);
      width: .1rem
    }

    .entry-content hr:before,
    hr.styled-separator:before {
      left: calc(50% - .5rem)
    }

    .entry-content hr:after,
    hr.styled-separator:after {
      right: calc(50% - .5rem)
    }

    a {
      color: #cd2653;
      text-decoration: underline
    }

    a:hover,
    a:focus {
      text-decoration: none
    }

    ul,
    ol {
      margin: 0 0 3rem 3rem
    }

    ul {
      list-style: disc
    }

    ul ul {
      list-style: circle
    }

    ul ul ul {
      list-style: square
    }

    ol {
      list-style: decimal
    }

    ol ol {
      list-style: lower-alpha
    }

    ol ol ol {
      list-style: lower-roman
    }

    li {
      line-height: 1.5;
      margin: .5rem 0 0 2rem
    }

    li>ul,
    li>ol {
      margin: 1rem 0 0 2rem
    }

    .reset-list-style,
    .reset-list-style ul,
    .reset-list-style ol {
      list-style: none;
      margin: 0
    }

    .reset-list-style li {
      margin: 0
    }

    dt,
    dd {
      line-height: 1.5
    }

    dt {
      font-weight: 700
    }

    dt+dd {
      margin-top: .5rem
    }

    dd+dt {
      margin-top: 1.5rem
    }

    blockquote {
      border-color: #cd2653;
      border-style: solid;
      border-width: 0 0 0 .2rem;
      color: inherit;
      font-size: 1em;
      margin: 4rem 0;
      padding: .5rem 0 .5rem 2rem
    }

    cite {
      color: #6d6d6d;
      font-size: 1.4rem;
      font-style: normal;
      font-weight: 600;
      line-height: 1.25
    }

    blockquote cite {
      display: block;
      margin: 2rem 0 0
    }

    blockquote p:last-child {
      margin: 0
    }

    code,
    kbd,
    pre,
    samp {
      font-family: monospace;
      font-size: .9em;
      padding: .4rem .6rem
    }

    code,
    kbd,
    samp {
      background: rgba(0, 0, 0, .075);
      border-radius: .2rem
    }

    pre {
      border: .1rem solid #dcd7ca;
      line-height: 1.5;
      margin: 4rem 0;
      overflow: auto;
      padding: 3rem 2rem;
      text-align: left
    }

    pre code {
      background: 0 0;
      padding: 0
    }

    figure {
      display: block;
      margin: 0
    }

    iframe {
      display: block;
      max-width: 100%
    }

    video {
      display: block
    }

    svg,
    img,
    embed,
    object {
      display: block;
      height: auto;
      max-width: 100%
    }

    figcaption,
    .wp-caption-text {
      color: #6d6d6d;
      display: block;
      font-size: 1.5rem;
      font-weight: 500;
      line-height: 1.2;
      margin-top: 1.5rem
    }

    figcaption a,
    .wp-caption-text a {
      color: inherit
    }

    blockquote.instagram-media,
    iframe.instagram-media {
      margin: auto !important
    }

    .gallery {
      display: flex;
      flex-wrap: wrap;
      margin: 3em 0 3em -.8em;
      width: calc(100% + 1.6em)
    }

    .gallery-item {
      margin: .8em 0;
      padding: 0 .8em;
      width: 100%
    }

    .gallery-caption {
      display: block;
      margin-top: .8em
    }

    fieldset {
      border: .2rem solid #dcd7ca;
      padding: 2rem
    }

    legend {
      font-size: .85em;
      font-weight: 700;
      padding: 0 1rem
    }

    label {
      display: block;
      font-size: 1.6rem;
      font-weight: 400;
      margin: 0 0 .5rem
    }

    label.inline,
    input[type=checkbox]+label {
      display: inline;
      font-weight: 400;
      margin-left: .5rem
    }

    input[type=checkbox] {
      -webkit-appearance: none;
      -moz-appearance: none;
      position: relative;
      top: 2px;
      display: inline-block;
      margin: 0;
      width: 1.5rem;
      min-width: 1.5rem;
      height: 1.5rem;
      background: #fff;
      border-radius: 0;
      border-style: solid;
      border-width: .1rem;
      border-color: #dcd7ca;
      box-shadow: none;
      cursor: pointer
    }

    input[type=checkbox]:checked:before {
      content: url("data:image/svg+xml;utf8,%3Csvg%20xmlns%3D%27http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%27%20viewBox%3D%270%200%2020%2020%27%3E%3Cpath%20d%3D%27M14.83%204.89l1.34.94-5.81%208.38H9.02L5.78%209.67l1.34-1.25%202.57%202.4z%27%20fill%3D%27%23000000%27%2F%3E%3C%2Fsvg%3E");
      position: absolute;
      display: inline-block;
      margin: -.1875rem 0 0 -.25rem;
      height: 1.75rem;
      width: 1.75rem
    }

    input,
    textarea,
    button,
    .button,
    .faux-button,
    .wp-block-button__link,
    .wp-block-file__button {
      font-family: -apple-system, BlinkMacSystemFont, "Helvetica Neue", Helvetica, sans-serif;
      line-height: 1
    }

    @supports (font-variation-settings:normal) {

      input,
      textarea,
      button,
      .button,
      .faux-button,
      .faux-button.more-link,
      .wp-block-button__link,
      .wp-block-file__button {
        font-family: "Inter var", -apple-system, BlinkMacSystemFont, "Helvetica Neue", Helvetica, sans-serif
      }
    }

    input,
    textarea {
      border-color: #dcd7ca;
      color: #000
    }

    code,
    input[type=url],
    input[type=email],
    input[type=tel] {
      direction: ltr
    }

    input[type=text],
    input[type=password],
    input[type=email],
    input[type=url],
    input[type=date],
    input[type=month],
    input[type=time],
    input[type=datetime],
    input[type=datetime-local],
    input[type=week],
    input[type=number],
    input[type=search],
    input[type=tel],
    input[type=color],
    textarea {
      -webkit-appearance: none;
      -moz-appearance: none;
      background: #fff;
      border-radius: 0;
      border-style: solid;
      border-width: .1rem;
      box-shadow: none;
      display: block;
      font-size: 1.6rem;
      letter-spacing: -.015em;
      margin: 0;
      max-width: 100%;
      padding: 1.5rem 1.8rem;
      width: 100%
    }

    select {
      font-size: 1em
    }

    textarea {
      height: 12rem;
      line-height: 1.5;
      width: 100%
    }

    input::-webkit-input-placeholder {
      line-height: normal
    }

    input:-ms-input-placeholder {
      line-height: normal
    }

    input::-moz-placeholder {
      line-height: revert
    }

    input[type=search]::-webkit-search-decoration,
    input[type=search]::-webkit-search-cancel-button,
    input[type=search]::-webkit-search-results-button,
    input[type=search]::-webkit-search-results-decoration {
      display: none
    }

    button,
    .button,
    .faux-button,
    .wp-block-button__link,
    .wp-block-file .wp-block-file__button,
    input[type=button],
    input[type=reset],
    input[type=submit] {
      -webkit-appearance: none;
      -moz-appearance: none;
      background: #cd2653;
      border: none;
      border-radius: 0;
      color: #fff;
      cursor: pointer;
      display: inline-block;
      font-size: 1.5rem;
      font-weight: 600;
      letter-spacing: .0333em;
      line-height: 1.25;
      margin: 0;
      opacity: 1;
      padding: 1.1em 1.44em;
      text-align: center;
      text-decoration: none;
      text-transform: uppercase;
      transition: opacity .15s linear
    }

    button:focus,
    button:hover,
    .button:focus,
    .button:hover,
    .faux-button:focus,
    .faux-button:hover,
    .wp-block-button .wp-block-button__link:focus,
    .wp-block-button .wp-block-button__link:hover,
    .wp-block-file .wp-block-file__button:focus,
    .wp-block-file .wp-block-file__button:hover,
    input[type=button]:focus,
    input[type=button]:hover,
    input[type=reset]:focus,
    input[type=reset]:hover,
    input[type=submit]:focus,
    input[type=submit]:hover {
      text-decoration: underline
    }

    input[type=text]:focus,
    input[type=email]:focus,
    input[type=url]:focus,
    input[type=password]:focus,
    input[type=number]:focus,
    input[type=tel]:focus,
    input[type=range]:focus,
    input[type=date]:focus,
    input[type=month]:focus,
    input[type=week]:focus,
    input[type=time]:focus,
    input[type=datetime]:focus,
    input[type=datetime-local]:focus,
    input[type=color]:focus,
    textarea:focus {
      border-color: currentColor
    }

    input[type=search]:focus {
      outline: thin dotted;
      outline-offset: -4px
    }

    table {
      border: .1rem solid #dcd7ca;
      border-collapse: collapse;
      border-spacing: 0;
      empty-cells: show;
      font-size: 1.6rem;
      margin: 4rem 0;
      max-width: 100%;
      overflow: hidden;
      width: 100%
    }

    .alignleft>table {
      margin: 0
    }

    .alignright>table {
      margin: 0
    }

    th,
    td {
      border: .1rem solid #dcd7ca;
      line-height: 1.4;
      margin: 0;
      overflow: visible;
      padding: .5em
    }

    caption {
      background: #dcd7ca;
      font-weight: 600;
      padding: .5em;
      text-align: center
    }

    thead {
      vertical-align: bottom;
      white-space: nowrap
    }

    th {
      font-weight: 700
    }

    .no-margin {
      margin: 0
    }

    .no-padding {
      padding: 0
    }

    .screen-height {
      min-height: 100vh
    }

    .admin-bar .screen-height {
      min-height: calc(100vh - 32px)
    }

    @media (max-width:782px) {
      .admin-bar .screen-height {
        min-height: calc(100vh - 46px)
      }
    }

    .screen-width {
      position: relative;
      left: calc(50% - 50vw);
      width: 100vw
    }

    section {
      padding: 5rem 0;
      width: 100%
    }

    .section-inner {
      margin-left: auto;
      margin-right: auto;
      max-width: 120rem;
      width: calc(100% - 4rem)
    }

    .section-inner.max-percentage {
      width: 100%
    }

    .section-inner.thin {
      max-width: 58rem
    }

    .section-inner.small {
      max-width: 80rem
    }

    .section-inner.medium {
      max-width: 100rem
    }

    .section-inner.no-margin {
      margin: 0
    }

    .toggle {
      -moz-appearance: none;
      -webkit-appearance: none;
      color: inherit;
      cursor: pointer;
      font-family: inherit;
      position: relative;
      -webkit-touch-callout: none;
      -webkit-user-select: none;
      -khtml-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      text-align: inherit;
      user-select: none
    }

    button.toggle {
      background: 0 0;
      border: none;
      box-shadow: none;
      border-radius: 0;
      font-size: inherit;
      font-weight: 400;
      letter-spacing: inherit;
      padding: 0;
      text-transform: none
    }

    .js .show-js {
      display: block !important
    }

    .js .hide-js {
      display: none !important
    }

    .no-js .show-no-js {
      display: block !important
    }

    .no-js .hide-no-js {
      display: none !important
    }

    .font-size-xl {
      font-size: 1.25em
    }

    .font-size-xs {
      font-size: .8em
    }

    .no-select {
      -webkit-touch-callout: none;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none
    }

    .color-accent,
    .color-accent-hover:focus,
    .color-accent-hover:hover {
      color: #cd2653
    }

    .bg-accent,
    .bg-accent-hover:focus,
    .bg-accent-hover:hover {
      background-color: #cd2653
    }

    .border-color-accent,
    .border-color-accent-hover:focus,
    .border-color-accent-hover:hover {
      border-color: #cd2653
    }

    .fill-children-accent,
    .fill-children-accent * {
      fill: #cd2653
    }

    .fill-children-current-color,
    .fill-children-current-color * {
      fill: currentColor
    }

    .opacity-0 {
      opacity: 0
    }

    .opacity-5 {
      opacity: .05
    }

    .opacity-10 {
      opacity: .1
    }

    .opacity-15 {
      opacity: .15
    }

    .opacity-20 {
      opacity: .2
    }

    .opacity-25 {
      opacity: .25
    }

    .opacity-30 {
      opacity: .3
    }

    .opacity-35 {
      opacity: .35
    }

    .opacity-40 {
      opacity: .4
    }

    .opacity-45 {
      opacity: .45
    }

    .opacity-50 {
      opacity: .5
    }

    .opacity-55 {
      opacity: .55
    }

    .opacity-60 {
      opacity: .6
    }

    .opacity-65 {
      opacity: .65
    }

    .opacity-70 {
      opacity: .7
    }

    .opacity-75 {
      opacity: .75
    }

    .opacity-80 {
      opacity: .8
    }

    .opacity-85 {
      opacity: .85
    }

    .opacity-90 {
      opacity: .9
    }

    .blend-mode-exclusion {
      mix-blend-mode: exclusion
    }

    .blend-mode-hue {
      mix-blend-mode: hue
    }

    .blend-mode-saturation {
      mix-blend-mode: saturation
    }

    .blend-mode-color {
      mix-blend-mode: color
    }

    .blend-mode-luminosity {
      mix-blend-mode: luminosity
    }

    .bg-image {
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover
    }

    .bg-attachment-fixed {
      background-attachment: fixed
    }

    @supports (-webkit-overflow-scrolling:touch) {
      .bg-attachment-fixed {
        background-attachment: scroll
      }
    }

    @media (prefers-reduced-motion:reduce) {
      .bg-attachment-fixed {
        background-attachment: scroll
      }
    }

    .wp-block-image.is-resized {
      margin-left: auto;
      margin-right: auto
    }

    .search-form {
      align-items: stretch;
      display: flex;
      flex-wrap: nowrap;
      margin: 0 0 -.8rem -.8rem
    }

    .search-form .search-field,
    .search-form .search-submit {
      margin: 0 0 .8rem .8rem
    }

    .search-form label {
      align-items: stretch;
      display: flex;
      font-size: inherit;
      margin: 0;
      width: 100%
    }

    .search-form .search-field {
      width: 100%
    }

    .search-form .search-submit {
      flex-shrink: 0
    }

    .search-form .search-submit:focus,
    .search-form .search-submit:hover {
      text-decoration: none
    }

    ul.social-icons {
      display: flex;
      flex-wrap: wrap;
      margin: -.9rem 0 0 -.9rem;
      width: calc(100% + .9rem)
    }

    ul.social-icons li {
      margin: .9rem 0 0 .9rem
    }

    .social-icons a {
      align-items: center;
      background: #cd2653;
      border-radius: 50%;
      color: #fff;
      display: flex;
      height: 4.4rem;
      justify-content: center;
      padding: 0;
      text-decoration: none;
      transition: transform .15s ease-in-out;
      width: 4.4rem
    }

    .social-icons a:focus,
    .social-icons a:hover {
      transform: scale(1.1);
      text-decoration: none
    }

    .cover-modal {
      display: none;
      -ms-overflow-style: none;
      overflow: -moz-scrollbars-none
    }

    .cover-modal::-webkit-scrollbar {
      display: none !important
    }

    .cover-modal.show-modal {
      display: block;
      cursor: pointer
    }

    .cover-modal.show-modal>* {
      cursor: default
    }

    #site-header {
      background: #fff;
      position: relative
    }

    .header-inner {
      max-width: 168rem;
      padding: 3.15rem 0;
      z-index: 100
    }

    .header-titles-wrapper {
      align-items: center;
      display: flex;
      justify-content: center;
      padding: 0 4rem;
      text-align: center
    }

    body:not(.enable-search-modal) .header-titles-wrapper {
      justify-content: flex-start;
      padding-left: 0;
      text-align: left
    }

    .site-title,
    .site-logo,
    .site-description {
      margin: 0
    }

    .site-title {
      font-size: 2.1rem;
      font-weight: 600;
      line-height: 1
    }

    .site-title a {
      color: inherit;
      display: block;
      text-decoration: none
    }

    .site-title a:hover,
    .site-title a:focus {
      text-decoration: underline
    }

    .site-description {
      margin-top: 1rem;
      color: #6d6d6d;
      font-size: 1.8rem;
      font-weight: 500;
      display: none;
      letter-spacing: -.0311em;
      transition: all .15s linear
    }

    .site-logo a,
    .site-logo img {
      display: block
    }

    .header-titles .site-logo .site-logo {
      margin: 0
    }

    .site-logo img {
      max-height: 6rem;
      margin: 0 auto;
      width: auto
    }

    body:not(.enable-search-modal) .site-logo img {
      margin: 0
    }

    .overlay-header #site-header {
      background: 0 0;
      margin: 0;
      position: absolute;
      left: 0;
      right: 0;
      top: 0;
      z-index: 2
    }

    .overlay-header .header-inner {
      color: #fff
    }

    .overlay-header .site-description,
    .overlay-header .toggle {
      color: inherit
    }

    .overlay-header .header-inner .toggle-wrapper:before {
      background-color: currentColor;
      opacity: .25
    }

    .admin-bar.overlay-header #site-header {
      top: 32px
    }

    @media (max-width:782px) {
      .admin-bar.overlay-header #site-header {
        top: 46px
      }
    }

    .header-navigation-wrapper {
      display: none
    }

    .header-toggles {
      display: none
    }

    .header-inner .toggle {
      align-items: center;
      display: flex;
      overflow: visible;
      padding: 0 2rem
    }

    .header-inner .toggle svg {
      display: block;
      position: relative;
      z-index: 1
    }

    .header-inner .toggle path {
      fill: currentColor
    }

    .toggle-inner {
      display: flex;
      justify-content: center;
      height: 2.3rem;
      position: relative
    }

    .toggle-icon {
      display: block;
      overflow: hidden
    }

    .toggle-inner .toggle-text {
      color: #6d6d6d;
      font-size: 1rem;
      font-weight: 600;
      position: absolute;
      top: calc(100% + .5rem);
      width: auto;
      white-space: nowrap;
      word-break: break-all
    }

    .overlay-header .toggle-text {
      color: inherit
    }

    .header-inner .toggle:focus .toggle-text,
    .header-inner .toggle:hover .toggle-text {
      text-decoration: underline
    }

    .search-toggle {
      position: absolute;
      bottom: 0;
      left: 0;
      top: 0
    }

    .search-toggle .toggle-icon,
    .search-toggle svg {
      height: 2.5rem;
      max-width: 2.3rem;
      width: 2.3rem
    }

    .nav-toggle {
      position: absolute;
      bottom: 0;
      right: 0;
      top: 0;
      width: 6.6rem
    }

    .nav-toggle .toggle-icon,
    .nav-toggle svg {
      height: .8rem;
      width: 2.6rem
    }

    .nav-toggle .toggle-inner {
      padding-top: .8rem
    }

    .primary-menu-wrapper {
      display: none
    }

    ul.primary-menu {
      display: flex;
      font-size: 1.8rem;
      font-weight: 500;
      letter-spacing: -.0277em;
      flex-wrap: wrap;
      justify-content: flex-end;
      margin: -.8rem 0 0 -1.6rem
    }

    .primary-menu .icon {
      display: block;
      height: .7rem;
      position: absolute;
      pointer-events: none;
      transform: rotate(-45deg);
      width: 1.3rem
    }

    .primary-menu .icon:before,
    .primary-menu .icon:after {
      content: "";
      display: block;
      background-color: currentColor;
      position: absolute;
      bottom: calc(50% - .1rem);
      left: 0
    }

    .primary-menu .icon:before {
      height: .9rem;
      width: .2rem
    }

    .primary-menu .icon:after {
      height: .2rem;
      width: .9rem
    }

    .primary-menu li {
      font-size: inherit;
      line-height: 1.25;
      position: relative
    }

    .primary-menu>li {
      margin: .8rem 0 0 1.6rem
    }

    .primary-menu>li.menu-item-has-children>a {
      padding-right: 2rem
    }

    .primary-menu>li>.icon {
      right: -.5rem;
      top: calc(50% - .4rem)
    }

    .primary-menu a {
      color: inherit;
      display: block;
      line-height: 1.2;
      text-decoration: none;
      word-break: normal;
      word-wrap: normal
    }

    .primary-menu a:hover,
    .primary-menu a:focus,
    .primary-menu .current_page_ancestor {
      text-decoration: underline
    }

    .primary-menu li.current-menu-item>a,
    .primary-menu li.current-menu-item>.link-icon-wrapper>a {
      text-decoration: underline
    }

    .primary-menu li.current-menu-item>a:hover,
    .primary-menu li.current-menu-item>.link-icon-wrapper>a:hover,
    .primary-menu li.current-menu-item>a:focus,
    .primary-menu li.current-menu-item>.link-icon-wrapper>a:focus {
      text-decoration: none
    }

    .primary-menu ul {
      background: #000;
      border-radius: .4rem;
      color: #fff;
      font-size: 1.7rem;
      opacity: 0;
      padding: 1rem 0;
      position: absolute;
      right: 9999rem;
      top: calc(100% + 2rem);
      transition: opacity .15s linear, transform .15s linear, right 0s .15s;
      transform: translateY(.6rem);
      width: 20rem;
      z-index: 1
    }

    .primary-menu li.menu-item-has-children:hover>ul,
    .primary-menu li.menu-item-has-children:focus>ul,
    .primary-menu li.menu-item-has-children.focus>ul {
      right: 0;
      opacity: 1;
      transform: translateY(0);
      transition: opacity .15s linear, transform .15s linear
    }

    .primary-menu ul:before,
    .primary-menu ul:after {
      content: "";
      display: block;
      position: absolute;
      bottom: 100%
    }

    .primary-menu ul:before {
      height: 2rem;
      left: 0;
      right: 0
    }

    .primary-menu ul:after {
      border: .8rem solid transparent;
      border-bottom-color: #000;
      right: 1.8rem
    }

    .primary-menu ul a {
      background: 0 0;
      border: none;
      color: inherit;
      display: block;
      padding: 1rem 2rem;
      transition: background-color .15s linear;
      width: 100%
    }

    .primary-menu ul li.menu-item-has-children>a {
      padding-right: 4.5rem
    }

    .primary-menu ul li.menu-item-has-children .icon {
      position: absolute;
      right: 1.5rem;
      top: calc(50% - .5rem)
    }

    .primary-menu ul ul {
      top: -1rem
    }

    .primary-menu ul li.menu-item-has-children:hover>ul,
    .primary-menu ul li.menu-item-has-children:focus>ul,
    .primary-menu ul li.menu-item-has-children.focus>ul {
      right: calc(100% + 2rem)
    }

    .primary-menu ul ul:before {
      bottom: 0;
      height: auto;
      left: auto;
      right: -2rem;
      top: 0;
      width: 2rem
    }

    .primary-menu ul ul:after {
      border-bottom-color: transparent;
      border-left-color: #000;
      bottom: auto;
      right: -1.6rem;
      top: 2rem
    }

    .rtl .primary-menu ul ul:after {
      transform: rotate(180deg)
    }

    @media (any-pointer:coarse) {
      .primary-menu>li.menu-item-has-children>a {
        padding-right: 0;
        margin-right: 2rem
      }

      .primary-menu ul li.menu-item-has-children>a {
        margin-right: 4.5rem;
        padding-right: 0;
        width: unset
      }
    }

    body.touch-enabled .primary-menu>li.menu-item-has-children>a {
      padding-right: 0;
      margin-right: 2rem
    }

    body.touch-enabled .primary-menu ul li.menu-item-has-children>a {
      margin-right: 4.5rem;
      padding-right: 0;
      width: unset
    }

    .menu-modal {
      background: #fff;
      display: none;
      opacity: 0;
      overflow-y: auto;
      overflow-x: hidden;
      position: fixed;
      bottom: 0;
      left: -99999rem;
      right: 99999rem;
      top: 0;
      transition: opacity .25s ease-in, left 0s .25s, right 0s .25s;
      z-index: 99
    }

    .admin-bar .menu-modal {
      top: 32px
    }

    @media (max-width:782px) {
      .admin-bar .menu-modal {
        top: 46px
      }
    }

    .menu-modal.show-modal {
      display: flex
    }

    .menu-modal.active {
      left: 0;
      opacity: 1;
      right: 0;
      transition: opacity .25s ease-out
    }

    .menu-modal-inner {
      background: #fff;
      display: flex;
      justify-content: stretch;
      overflow: auto;
      -ms-overflow-style: auto;
      width: 100%
    }

    .menu-wrapper {
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      position: relative
    }

    button.close-nav-toggle {
      align-items: center;
      display: flex;
      font-size: 1.6rem;
      font-weight: 500;
      justify-content: flex-end;
      padding: 3.1rem 0;
      width: 100%
    }

    button.close-nav-toggle svg {
      height: 1.6rem;
      width: 1.6rem
    }

    button.close-nav-toggle .toggle-text {
      margin-right: 1.6rem
    }

    .menu-modal .menu-top {
      flex-shrink: 0
    }

    .modal-menu {
      position: relative;
      left: calc(50% - 50vw);
      width: 100vw
    }

    .modal-menu li {
      border-color: #dedfdf;
      border-style: solid;
      border-width: .1rem 0 0;
      display: flex;
      flex-wrap: wrap;
      line-height: 1;
      justify-content: flex-start;
      margin: 0
    }

    .modal-menu>li>a,
    .modal-menu>li>.ancestor-wrapper>a {
      font-size: 2rem;
      font-weight: 700;
      letter-spacing: -.0375em
    }

    .modal-menu>li:last-child {
      border-bottom-width: .1rem
    }

    .modal-menu .ancestor-wrapper {
      display: flex;
      justify-content: space-between;
      width: 100%
    }

    .modal-menu a {
      display: block;
      padding: 2rem 2.5rem;
      text-decoration: none;
      width: 100%
    }

    .modal-menu a:focus,
    .modal-menu a:hover,
    .modal-menu li.current-menu-item>.ancestor-wrapper>a,
    .modal-menu li.current_page_ancestor>.ancestor-wrapper>a {
      text-decoration: underline
    }

    button.sub-menu-toggle {
      border-left: .1rem solid #dedfdf;
      flex-shrink: 0;
      margin: 1rem 0;
      padding: 0 2.5rem
    }

    button.sub-menu-toggle svg {
      height: .9rem;
      transition: transform .15s linear;
      width: 1.5rem
    }

    button.sub-menu-toggle.active svg {
      transform: rotate(180deg)
    }

    .modal-menu ul {
      display: none;
      margin: 0;
      width: 100%
    }

    .modal-menu ul li {
      border-left-width: 1rem
    }

    .modal-menu ul li a {
      color: inherit;
      font-weight: 500
    }

    .menu-wrapper .menu-item {
      position: relative
    }

    .menu-wrapper .active {
      display: block
    }

    .menu-wrapper.is-toggling {
      pointer-events: none
    }

    .menu-wrapper.is-toggling .menu-item {
      position: absolute;
      top: 0;
      left: 0;
      margin: 0;
      width: 100%
    }

    .menu-wrapper.is-toggling .menu-bottom .social-menu .menu-item {
      width: auto
    }

    .menu-wrapper.is-animating .menu-item,
    .menu-wrapper.is-animating .toggling-target {
      transition-duration: .25s
    }

    .menu-wrapper.is-animating .menu-item {
      transition-property: transform
    }

    .menu-wrapper.is-toggling .toggling-target {
      display: block;
      position: absolute;
      top: 0;
      left: 0;
      opacity: 1
    }

    .menu-wrapper.is-toggling .toggling-target.active {
      opacity: 0
    }

    .menu-wrapper.is-animating.is-toggling .toggling-target {
      display: block;
      transition-property: opacity;
      opacity: 0
    }

    .menu-wrapper.is-animating.is-toggling .toggling-target.active {
      opacity: 1
    }

    .menu-wrapper.is-toggling .modal-menu>li:last-child li {
      border-top-color: transparent;
      border-bottom-width: .1rem
    }

    @media (prefers-reduced-motion:reduce) {

      .menu-wrapper.is-animating .menu-item,
      .menu-wrapper.is-animating .toggling-target {
        transition-duration: 1ms !important
      }
    }

    .expanded-menu {
      display: none
    }

    .mobile-menu {
      display: block
    }

    .menu-bottom {
      flex-shrink: 0;
      padding: 4rem 0
    }

    .menu-bottom nav {
      width: 100%
    }

    .menu-copyright {
      display: none;
      font-size: 1.6rem;
      font-weight: 500;
      margin: 0
    }

    .menu-copyright a:focus,
    .menu-copyright a:hover {
      text-decoration: underline
    }

    .menu-bottom .social-menu {
      justify-content: center
    }

    .search-modal {
      background: rgba(0, 0, 0, .2);
      display: none;
      opacity: 0;
      position: fixed;
      bottom: 0;
      left: -9999rem;
      top: 0;
      transition: opacity .2s linear, left 0s .2s linear;
      width: 100%;
      z-index: 999
    }

    .admin-bar .search-modal.active {
      top: 32px
    }

    @media (max-width:782px) {
      .admin-bar .search-modal.active {
        top: 46px
      }
    }

    .search-modal-inner {
      background: #fff;
      transform: translateY(-100%);
      transition: transform .15s linear, box-shadow .15s linear
    }

    .search-modal-inner .section-inner {
      display: flex;
      justify-content: space-between;
      max-width: 168rem
    }

    .search-modal.active {
      left: 0;
      opacity: 1;
      transition: opacity .2s linear
    }

    .search-modal.active .search-modal-inner {
      box-shadow: 0 0 2rem 0 rgba(0, 0, 0, .08);
      transform: translateY(0);
      transition: transform .25s ease-in-out, box-shadow .1s .25s linear
    }

    button.search-untoggle {
      align-items: center;
      display: flex;
      flex-shrink: 0;
      justify-content: center;
      margin-right: -2.5rem;
      padding: 0 2.5rem
    }

    .search-modal button.search-untoggle {
      color: inherit
    }

    .search-modal.active .search-untoggle {
      animation: popIn both .3s .2s
    }

    .search-untoggle svg {
      height: 1.5rem;
      transition: transform .15s ease-in-out;
      width: 1.5rem
    }

    .search-untoggle:focus svg,
    .search-untoggle:hover svg {
      transform: scale(1.15)
    }

    .search-modal form {
      margin: 0;
      position: relative;
      width: 100%
    }

    .search-modal .search-field {
      background: 0 0;
      border: none;
      border-radius: 0;
      color: inherit;
      font-size: 2rem;
      letter-spacing: -.0277em;
      height: 8.4rem;
      margin: 0 0 0 -2rem;
      max-width: calc(100% + 2rem);
      padding: 0 0 0 2rem;
      width: calc(100% + 2rem)
    }

    .search-modal .search-field::-webkit-input-placeholder {
      color: inherit
    }

    .search-modal .search-field:-ms-input-placeholder {
      color: inherit
    }

    .search-modal .search-field::-moz-placeholder {
      color: inherit;
      line-height: 4
    }

    .search-modal .search-submit {
      position: absolute;
      right: -9999rem;
      top: 50%;
      transform: translateY(-50%)
    }

    .search-modal .search-submit:focus {
      right: 0
    }

    .cover-header {
      display: flex;
      overflow: hidden
    }

    .cover-header-inner-wrapper {
      display: flex;
      position: relative;
      flex-direction: column;
      justify-content: flex-end;
      width: 100%
    }

    .cover-header-inner {
      padding: 10rem 0 5rem;
      width: 100%
    }

    .cover-color-overlay,
    .cover-color-overlay:before {
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      top: 0
    }

    .cover-color-overlay:before {
      background: currentColor;
      content: "";
      display: block
    }

    .cover-header .entry-header {
      position: relative;
      width: 100%;
      z-index: 1
    }

    .cover-header .entry-header * {
      color: #fff
    }

    body.template-cover .entry-header {
      background: 0 0;
      padding: 0
    }

    .cover-header h1,
    .cover-header h2,
    .cover-header h3,
    .cover-header h4,
    .cover-header h5,
    .cover-header h6,
    .cover-header .faux-heading {
      color: inherit
    }

    .cover-header .entry-header a {
      color: inherit
    }

    .to-the-content-wrapper {
      position: absolute;
      left: 0;
      right: 0;
      top: calc(100% + .5rem)
    }

    .to-the-content {
      align-items: center;
      display: flex;
      justify-content: center;
      height: 4rem;
      text-decoration: none
    }

    .to-the-content svg {
      height: 2rem;
      transition: transform .15s linear;
      transform: translateY(0);
      width: 1.767rem
    }

    .to-the-content:focus svg,
    .to-the-content:hover svg {
      transform: translateY(20%)
    }

    body.template-full-width .entry-content>*:not(.alignwide):not(.alignfull):not(.alignleft):not(.alignright):not(.is-style-wide),
    body.template-full-width [class*=__inner-container]>*:not(.alignwide):not(.alignfull):not(.alignleft):not(.alignright):not(.is-style-wide) {
      max-width: 120rem
    }

    body.template-full-width .entry-content .alignleft,
    body.template-full-width .entry-content .alignright {
      position: static
    }

    body.template-full-width .entry-content .alignleft,
    body.template-full-width [class*=wp-block].alignwide [class*=__inner-container]>.alignleft,
    body.template-full-width [class*=wp-block].alignwide [class*=__inner-container]>p .alignleft,
    body.template-full-width [class*=wp-block].alignwide [class*=__inner-container]>.wp-block-image .alignleft {
      margin-left: 0;
      position: static
    }

    body.template-full-width .entry-content>.alignleft,
    body.template-full-width [class*=wp-block].alignfull:not(.has-background) [class*=__inner-container]>.alignleft,
    body.template-full-width [class*=wp-block].alignfull:not(.has-background) [class*=__inner-container]>p .alignleft,
    body.template-full-width [class*=wp-block].alignfull:not(.has-background) [class*=__inner-container]>.wp-block-image .alignleft {
      margin-left: 2rem;
      position: static
    }

    body.template-full-width .entry-content .alignright,
    body.template-full-width [class*=wp-block].alignwide [class*=__inner-container]>.alignright,
    body.template-full-width [class*=wp-block].alignwide [class*=__inner-container]>p .alignright,
    body.template-full-width [class*=wp-block].alignwide [class*=__inner-container]>.wp-block-image .alignright {
      margin-right: 0;
      position: static
    }

    body.template-full-width .entry-content>.alignright,
    body.template-full-width [class*=wp-block].alignfull:not(.has-background) [class*=__inner-container]>.alignright,
    body.template-full-width [class*=wp-block].alignfull:not(.has-background) [class*=__inner-container]>p .alignright,
    body.template-full-width [class*=wp-block].alignfull:not(.has-background) [class*=__inner-container]>.wp-block-image .alignright {
      margin-right: 2rem;
      position: static
    }

    .archive-header {
      background-color: #fff;
      padding: 4rem 0
    }

    .reduced-spacing .archive-header {
      padding-bottom: 2rem
    }

    .archive-title {
      font-size: 2.4rem;
      font-weight: 700;
      letter-spacing: -.026666667em;
      margin: 0
    }

    .archive-subtitle p:last-child {
      margin-bottom: 0
    }

    body:not(.singular) main>article:first-of-type {
      padding: 4rem 0 0
    }

    .no-search-results-form {
      padding-top: 5rem
    }

    .singular .entry-header {
      background-color: #fff;
      padding: 4rem 0
    }

    .entry-categories {
      line-height: 1.25;
      margin-bottom: 2rem
    }

    .entry-categories-inner {
      justify-content: center;
      display: flex;
      flex-wrap: wrap;
      margin: -.5rem 0 0 -1rem
    }

    .entry-categories a {
      border-bottom: .15rem solid currentColor;
      font-size: 1.4rem;
      font-weight: 700;
      letter-spacing: .036666667em;
      margin: .5rem 0 0 1rem;
      text-decoration: none;
      text-transform: uppercase
    }

    .entry-categories a:focus,
    .entry-categories a:hover {
      border-bottom-color: transparent
    }

    h1.entry-title,
    h2.entry-title {
      margin: 0
    }

    .entry-title a {
      color: inherit;
      text-decoration: none
    }

    .entry-title a:focus,
    .entry-title a:hover {
      text-decoration: underline
    }

    .intro-text {
      margin-top: 2rem
    }

    .singular .intro-text {
      font-size: 2rem;
      letter-spacing: -.0315em;
      line-height: 1.4
    }

    .post-meta-single-top .post-meta {
      justify-content: center
    }

    .post-meta-wrapper {
      margin-top: 2rem;
      margin-right: auto;
      margin-left: auto;
      max-width: 58rem;
      width: 100%
    }

    .post-meta {
      color: #6d6d6d;
      display: flex;
      flex-wrap: wrap;
      font-size: 1.5rem;
      font-weight: 500;
      list-style: none;
      margin: -1rem 0 0 -2rem
    }

    .post-meta li {
      flex-shrink: 0;
      letter-spacing: -.016875em;
      margin: 1rem 0 0 2rem;
      max-width: calc(100% - 2rem)
    }

    .post-meta a {
      color: inherit;
      text-decoration: none
    }

    .post-meta a:focus,
    .post-meta a:hover {
      text-decoration: underline
    }

    .post-meta .meta-wrapper {
      align-items: center;
      display: flex;
      flex-wrap: nowrap
    }

    .post-meta .meta-icon {
      flex-shrink: 0;
      margin-right: 1rem
    }

    .sticky .post-sticky {
      color: inherit
    }

    .post-meta .post-author .meta-icon svg {
      width: 1.6rem;
      height: 1.8rem
    }

    .post-meta .post-categories .meta-icon svg {
      width: 1.8rem;
      height: 1.7rem
    }

    .post-meta .post-comment-link .meta-icon svg {
      width: 1.8rem;
      height: 1.8rem
    }

    .post-meta .post-date .meta-icon svg {
      width: 1.7rem;
      height: 1.8rem
    }

    .post-meta .post-edit .meta-icon svg {
      width: 1.8rem;
      height: 1.8rem
    }

    .post-meta .post-sticky .meta-icon svg {
      width: 1.5rem;
      height: 1.8rem
    }

    .post-meta .post-tags .meta-icon svg {
      width: 1.8rem;
      height: 1.8rem
    }

    .post-meta svg * {
      fill: currentColor
    }

    .featured-media {
      margin-top: 5rem;
      position: relative
    }

    .singular .featured-media {
      margin-top: 0
    }

    .singular .featured-media-inner {
      position: relative;
      left: calc(50% - 50vw);
      width: 100vw
    }

    .singular .featured-media:before {
      background: #fff;
      content: "";
      display: block;
      position: absolute;
      bottom: 50%;
      left: 0;
      right: 0;
      top: 0
    }

    .featured-media img {
      margin: 0 auto
    }

    .featured-media figcaption {
      margin: 1.5rem auto 0 auto;
      text-align: center;
      width: calc(100% - 5rem)
    }

    .post-inner {
      padding-top: 5rem
    }

    .reduced-spacing.missing-post-thumbnail .post-inner {
      padding-top: 0
    }

    .post-nav-links {
      border-radius: .4rem;
      display: flex;
      font-size: .9em;
      font-weight: 600;
      line-height: 1;
      margin: 3em auto 0 auto;
      padding: 0;
      width: calc(100% - 4rem);
      max-width: 58rem
    }

    .post-nav-links>span.label {
      padding: 1em 0
    }

    .post-nav-links>* {
      padding: 1em .75em
    }

    .post-meta-wrapper.post-meta-single-bottom {
      margin-top: 3rem
    }

    .author-bio {
      margin-top: 4rem;
      margin-right: auto;
      margin-left: auto;
      max-width: 58rem;
      width: 100%
    }

    .hide-avatars .author-bio {
      padding-left: 0
    }

    .author-bio .author-title-wrapper {
      align-items: center;
      display: flex;
      margin: 0 0 1rem
    }

    .author-bio .avatar {
      border-radius: 50%;
      margin-right: 1.5rem;
      height: 5rem;
      width: 5rem
    }

    .hide-avatars img.avatar {
      display: none
    }

    .author-bio p:last-child {
      margin-bottom: 0
    }

    .author-bio .author-title {
      margin: 0
    }

    .author-bio .author-link {
      display: block;
      font-size: 1.6rem;
      font-weight: 600;
      margin-top: 1em;
      text-decoration: none
    }

    .author-bio .author-link:focus,
    .author-bio .author-link:hover {
      text-decoration: underline
    }

    .pagination-single {
      font-size: 1.8rem;
      margin-top: 5rem
    }

    .pagination-single-inner {
      display: flex;
      flex-direction: column
    }

    .pagination-single hr:first-child {
      margin: 0 0 2.8rem
    }

    .pagination-single hr:last-child {
      margin: 2.8rem 0 .8rem
    }

    .pagination-single a {
      align-items: baseline;
      display: flex;
      font-weight: 600;
      letter-spacing: -.0275em;
      text-decoration: none;
      flex: 1
    }

    .pagination-single a+a {
      margin-top: 1rem
    }

    .pagination-single a .arrow {
      margin-right: 1rem
    }

    .pagination-single a:focus .title,
    .pagination-single a:hover .title {
      text-decoration: underline
    }

    .has-text-color a {
      color: inherit
    }

    :root .has-accent-color {
      color: #cd2653
    }

    :root .has-accent-background-color {
      background-color: #cd2653;
      color: #fff
    }

    :root .has-primary-color {
      color: #000
    }

    :root .has-primary-background-color {
      background-color: #000;
      color: #f5efe0
    }

    :root .has-secondary-color {
      color: #6d6d6d
    }

    :root .has-secondary-background-color {
      background-color: #6d6d6d;
      color: #fff
    }

    :root .has-subtle-background-color {
      color: #dcd7ca
    }

    :root .has-subtle-background-background-color {
      background-color: #dcd7ca;
      color: #000
    }

    :root .has-background-color {
      color: #f5efe0
    }

    :root .has-background-background-color {
      background-color: #f5efe0;
      color: #000
    }

    .has-text-align-left {
      text-align: left
    }

    .has-text-align-center {
      text-align: center
    }

    .has-text-align-right {
      text-align: right
    }

    .has-drop-cap:not(:focus):first-letter {
      color: #cd2653;
      font-family: -apple-system, BlinkMacSystemFont, "Helvetica Neue", Helvetica, sans-serif;
      font-size: 5.1em;
      font-weight: 800;
      margin: .05em .1em 0 0
    }

    .has-drop-cap:not(:focus)::first-letter:after {
      content: "";
      display: table;
      clear: both
    }

    .has-drop-cap:not(:focus):after {
      padding: 0
    }

    .has-drop-cap:not(:focus):first-letter,
    .entry-content .wp-block-archives,
    .entry-content .wp-block-categories,
    .entry-content .wp-block-cover-image,
    .entry-content .wp-block-latest-comments,
    .entry-content .wp-block-latest-posts,
    .entry-content .wp-block-pullquote,
    .entry-content .wp-block-quote.is-large,
    .entry-content .wp-block-quote.is-style-large {
      font-family: -apple-system, BlinkMacSystemFont, "Helvetica Neue", Helvetica, sans-serif
    }

    @supports (font-variation-settings:normal) {

      .has-drop-cap:not(:focus):first-letter,
      .entry-content .wp-block-archives,
      .entry-content .wp-block-categories,
      .entry-content .wp-block-latest-posts,
      .entry-content .wp-block-latest-comments,
      .entry-content .wp-block-cover-image p,
      .entry-content .wp-block-pullquote {
        font-family: "Inter var", -apple-system, BlinkMacSystemFont, "Helvetica Neue", Helvetica, sans-serif
      }
    }

    .entry-content .has-small-font-size {
      font-size: .842em
    }

    .entry-content .has-normal-font-size,
    .entry-content .has-regular-font-size {
      font-size: 1em
    }

    .entry-content .has-medium-font-size {
      font-size: 1.1em;
      line-height: 1.45
    }

    .entry-content .has-large-font-size {
      font-size: 1.25em;
      line-height: 1.4
    }

    .entry-content .has-larger-font-size {
      font-size: 1.5em;
      line-height: 1.3
    }

    *[class*=_inner-container]>*:first-child {
      margin-top: 0
    }

    *[class*=_inner-container]>*:last-child {
      margin-bottom: 0
    }

    .wp-block-archives:not(.alignwide):not(.alignfull),
    .wp-block-categories:not(.alignwide):not(.alignfull),
    .wp-block-code,
    .wp-block-columns:not(.alignwide):not(.alignfull),
    .wp-block-cover:not(.alignwide):not(.alignfull):not(.alignleft):not(.alignright):not(.aligncenter),
    .wp-block-embed:not(.alignwide):not(.alignfull):not(.alignleft):not(.alignright):not(.aligncenter),
    .wp-block-gallery:not(.alignwide):not(.alignfull):not(.alignleft):not(.alignright):not(.aligncenter),
    .wp-block-group:not(.has-background):not(.alignwide):not(.alignfull),
    .wp-block-image:not(.alignwide):not(.alignfull):not(.alignleft):not(.alignright):not(.aligncenter),
    .wp-block-latest-comments:not(.aligncenter):not(.alignleft):not(.alignright),
    .wp-block-latest-posts:not(.aligncenter):not(.alignleft):not(.alignright),
    .wp-block-media-text:not(.alignwide):not(.alignfull),
    .wp-block-preformatted,
    .wp-block-pullquote:not(.alignwide):not(.alignfull):not(.alignleft):not(.alignright),
    .wp-block-quote,
    .wp-block-quote.is-large,
    .wp-block-quote.is-style-large,
    .wp-block-verse,
    .wp-block-video:not(.alignwide):not(.alignfull) {
      margin-bottom: 3rem;
      margin-top: 3rem
    }

    [class*=__inner-container] .wp-block-group:not(.alignfull):not(.alignwide):not(.alignleft):not(.alignright),
    [class*=__inner-container] .wp-block-cover:not(.alignfull):not(.alignwide):not(.alignleft):not(.alignright) {
      margin-left: auto;
      margin-right: auto;
      max-width: 58rem
    }

    .wp-block-archives,
    .wp-block-categories,
    .wp-block-latest-posts,
    .wp-block-latest-comments {
      list-style: none;
      margin-left: 0
    }

    .wp-block-archives ul,
    .wp-block-categories ul,
    .wp-block-latest-posts ul,
    .wp-block-latest-comments ul {
      list-style: none
    }

    .entry-content .wp-block-archives>li,
    .entry-content .wp-block-categories>li,
    .entry-content .wp-block-latest-posts>li,
    .entry-content .wp-block-latest-comment>li {
      margin-left: 0
    }

    .entry-content .wp-block-archives>li:last-child,
    .entry-content .wp-block-categories>li:last-child,
    .entry-content .wp-block-latest-posts>li:last-child,
    .entry-content .wp-block-latest-comment>li:last-child {
      margin-bottom: 0
    }

    .entry-content .wp-block-archives *,
    .entry-content .wp-block-categories *,
    .entry-content .wp-block-latest-posts *,
    .entry-content .wp-block-latest-comments * {
      font-family: inherit
    }

    .entry-content .wp-block-archives li,
    .entry-content .wp-block-categories li,
    .entry-content .wp-block-latest-posts li {
      color: #6d6d6d
    }

    .wp-block-archives a,
    .wp-block-categories a,
    .wp-block-latest-posts a,
    .wp-block-latest-comments a {
      font-weight: 700;
      text-decoration: none
    }

    .wp-block-archives a:hover,
    .wp-block-categories a:hover,
    .wp-block-latest-posts a:hover,
    .wp-block-latest-comments a:hover,
    .wp-block-archives a:focus,
    .wp-block-categories a:focus,
    .wp-block-latest-posts a:focus,
    .wp-block-latest-comments a:focus {
      text-decoration: underline
    }

    .wp-block-latest-posts a,
    .wp-block-latest-comments__comment-meta {
      font-weight: 700;
      letter-spacing: -.025em;
      line-height: 1.25
    }

    .wp-block-latest-comments__comment-date,
    .wp-block-latest-posts__post-date {
      color: #6d6d6d;
      font-size: .7em;
      font-weight: 600;
      letter-spacing: normal;
      margin-top: .15em
    }

    .wp-block-embed figcaption,
    .wp-block-image figcaption {
      color: #6d6d6d;
      font-size: 1.4rem;
      margin-bottom: 0;
      margin-top: 1.5rem
    }

    .wp-block-audio audio {
      width: 100%
    }

    .wp-block-button {
      margin: 3rem 0
    }

    .wp-block-button.is-style-outline {
      color: #cd2653
    }

    .is-style-outline .wp-block-button__link:not(.has-text-color) {
      color: inherit
    }

    .is-style-outline .wp-block-button__link {
      padding: calc(1.1em - .2rem) calc(1.44em - .2rem)
    }

    .wp-block-columns.alignfull,
    .alignfull:not(.has-background) .wp-block-columns {
      padding-left: 2rem;
      padding-right: 2rem
    }

    .wp-block-column {
      margin-bottom: 3.2rem
    }

    .wp-block-column>*:first-child {
      margin-top: 0
    }

    .wp-block-column>*:last-child {
      margin-bottom: 0
    }

    .wp-block-cover-image .wp-block-cover__inner-container,
    .wp-block-cover .wp-block-cover__inner-container {
      width: calc(100% - 4rem);
      padding: 2rem 0
    }

    .wp-block-cover-image .wp-block-cover-image-text,
    .wp-block-cover-image .wp-block-cover-text,
    .wp-block-cover-image h2,
    .wp-block-cover .wp-block-cover-image-text,
    .wp-block-cover .wp-block-cover-text,
    .wp-block-cover h2 {
      max-width: 100%;
      padding: 0
    }

    .wp-block-cover-image h2,
    .wp-block-cover h2 {
      font-size: 3.2rem
    }

    .wp-block-file {
      align-items: center;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between
    }

    .wp-block-file a:not(.wp-block-file__button) {
      font-weight: 700;
      text-decoration: none
    }

    .wp-block-file a:not(.wp-block-file__button):not(:last-child) {
      margin-right: 1rem
    }

    .wp-block-file a:not(.wp-block-file__button):focus,
    .wp-block-file a:not(.wp-block-file__button):hover {
      text-decoration: underline
    }

    .wp-block-file .wp-block-file__button {
      font-size: 1.5rem;
      padding: 1em 1.25em
    }

    .wp-block-file a.wp-block-file__button:visited {
      opacity: 1
    }

    .wp-block-file a.wp-block-file__button:active,
    .wp-block-file a.wp-block-file__button:focus,
    .wp-block-file a.wp-block-file__button:hover {
      opacity: 1;
      text-decoration: underline
    }

    .wp-block-gallery ul {
      list-style: none;
      margin: 0 0 -1.6rem
    }

    figure.wp-block-gallery.alignnone,
    figure.wp-block-gallery.aligncenter {
      margin-bottom: 3rem;
      margin-top: 3rem
    }

    figure.wp-block-gallery.alignleft {
      margin: .3rem 2rem 2rem 0
    }

    figure.wp-block-gallery.alignright {
      margin: .3rem 0 2rem 2rem
    }

    figure.wp-block-gallery.alignwide {
      margin-bottom: 4rem;
      margin-top: 4rem
    }

    figure.wp-block-gallery.alignfull {
      margin-bottom: 5rem;
      margin-top: 5rem
    }

    .wp-block-group.has-background {
      padding: 2rem;
      margin-bottom: 0;
      margin-top: 0
    }

    .wp-block-group__inner-container {
      margin: 0 auto
    }

    .wp-block-group__inner-container,
    .entry-content .wp-block-group p {
      max-width: 100%
    }

    .alignfull:not(.has-background)>.wp-block-group__inner-container>p:not(.has-background-color) {
      padding-left: 2rem;
      padding-right: 2rem
    }

    .wp-block-media-text .wp-block-media-text__content {
      padding: 3rem 2rem
    }

    .wp-block-media-text .wp-block-media-text__content p {
      max-width: none
    }

    .wp-block-media-text__content>*:first-child {
      margin-top: 0
    }

    .wp-block-media-text__content>*:last-child {
      margin-bottom: 0
    }

    .wp-block-pullquote {
      padding: 0;
      position: relative
    }

    .wp-block-pullquote.alignleft,
    .wp-block-pullquote.alignright {
      max-width: calc(100% - 4rem)
    }

    .wp-block-pullquote:before {
      background: #fff;
      border-radius: 50%;
      color: #cd2653;
      content: "”";
      display: block;
      font-size: 6.2rem;
      font-weight: 500;
      line-height: 1.2;
      margin: 0 auto 1.5rem auto;
      text-align: center;
      height: 4.4rem;
      width: 4.4rem
    }

    .reduced-spacing .wp-block-pullquote:before {
      border: .1rem solid currentColor;
      font-size: 5.9rem
    }

    .wp-block-pullquote blockquote {
      border: none;
      margin: 0;
      padding: 0
    }

    .wp-block-pullquote blockquote p {
      font-family: inherit;
      font-size: 2.8rem;
      font-weight: 700;
      line-height: 1.178571429;
      letter-spacing: -.041785714em;
      max-width: 100%
    }

    .wp-block-pullquote p:last-of-type {
      margin-bottom: 0
    }

    .wp-block-pullquote cite {
      color: #6d6d6d;
      font-size: 1.6rem;
      font-weight: 500;
      margin-top: 1.2rem
    }

    .wp-block-pullquote.alignleft p,
    .wp-block-pullquote.alignright p {
      font-size: 2.8rem
    }

    .wp-block-pullquote.alignleft {
      text-align: left
    }

    .wp-block-pullquote.alignright {
      text-align: right
    }

    .wp-block-pullquote.alignleft:before {
      margin-left: 0
    }

    .wp-block-pullquote.alignright:before {
      margin-right: 0
    }

    .wp-block-pullquote.is-style-solid-color {
      padding: 3rem 2rem
    }

    .wp-block-pullquote.is-style-solid-color:before {
      position: absolute;
      top: 0;
      left: 50%;
      transform: translateY(-50%) translateX(-50%)
    }

    .wp-block-pullquote.is-style-solid-color.alignleft:before,
    .wp-block-pullquote.is-style-solid-color.alignright:before {
      transform: translateY(-50%)
    }

    .wp-block-pullquote.is-style-solid-color.alignleft:before {
      left: 2rem
    }

    .wp-block-pullquote.is-style-solid-color.alignright:before {
      left: auto;
      right: 2rem
    }

    .wp-block-pullquote.is-style-solid-color blockquote {
      max-width: 100%;
      text-align: inherit
    }

    .wp-block-pullquote.is-style-solid-color cite {
      color: inherit
    }

    hr.wp-block-separator {
      margin: 3rem 0
    }

    .wp-block-separator.is-style-wide {
      max-width: calc(100vw - 4rem);
      position: relative;
      width: 100%
    }

    .wp-block-separator.is-style-dots:before {
      background: 0 0;
      color: inherit;
      font-size: 3.2rem;
      font-weight: 700;
      height: auto;
      letter-spacing: 1em;
      padding-left: 1em;
      position: static;
      transform: none;
      width: auto
    }

    .wp-block-separator.is-style-dots:after {
      content: none
    }

    .wp-block-search .wp-block-search__input {
      width: auto
    }

    .wp-block-table.is-style-stripes tbody tr:nth-child(odd) {
      background: #dcd7ca
    }

    figure.wp-block-table.is-style-stripes {
      border-bottom: none
    }

    .wp-block-table.is-style-stripes table {
      border-collapse: inherit
    }

    .wp-block-quote p,
    .wp-block-quote cite {
      text-align: inherit
    }

    .wp-block-quote[style="text-align:center"] {
      border-width: 0;
      padding: 0
    }

    .wp-block-quote[style="text-align:right"] {
      border-width: 0 .2rem 0 0;
      padding: 0 2rem 0 0
    }

    .wp-block-quote.is-large,
    .wp-block-quote.is-style-large {
      border: none;
      padding: 0;
      margin-left: auto;
      margin-right: auto
    }

    .wp-block-quote.is-large p,
    .wp-block-quote.is-style-large p {
      font-family: inherit;
      font-size: 2.4rem;
      font-style: normal;
      font-weight: 700;
      letter-spacing: -.02em;
      line-height: 1.285
    }

    .wp-block-quote.is-large cite,
    .wp-block-quote.is-large footer,
    .wp-block-quote.is-style-large cite,
    .wp-block-quote.is-style-large footer {
      font-size: 1.6rem;
      text-align: inherit
    }

    .entry-content .wp-block-latest-comments li {
      margin: 2rem 0
    }

    .has-avatars .wp-block-latest-comments__comment .wp-block-latest-comments__comment-excerpt,
    .has-avatars .wp-block-latest-comments__comment .wp-block-latest-comments__comment-meta {
      margin-left: 5.5rem
    }

    .entry-content .wp-block-latest-comments a {
      text-decoration: none
    }

    .entry-content .wp-block-latest-comments a:hover,
    .entry-content .wp-block-latest-comments a:focus {
      text-decoration: underline
    }

    .wp-block-latest-comments__comment {
      font-size: inherit
    }

    .wp-block-latest-comments__comment-date {
      margin-top: .4em
    }

    .wp-block-latest-comments__comment-excerpt p {
      font-size: .7em;
      margin: .9rem 0 2rem
    }

    .wp-block-latest-posts.is-grid li {
      border-top: .2rem solid #dcd7ca;
      margin-top: 2rem;
      padding-top: 1rem
    }

    .wp-block-latest-posts.has-dates {
      list-style: none
    }

    .wp-block-latest-posts.has-dates:not(.is-grid) li {
      margin-top: 1.5rem
    }

    .wp-block-latest-posts.has-dates:not(.is-grid) li:first-child {
      margin-top: 0
    }

    .entry-content {
      line-height: 1.5
    }

    .entry-content>* {
      margin-left: auto;
      margin-right: auto;
      margin-bottom: 1.25em
    }

    .entry-content>*:first-child {
      margin-top: 0
    }

    .entry-content>*:last-child {
      margin-bottom: 0
    }

    .read-more-button-wrap {
      margin-top: 1em;
      text-align: center
    }

    .entry-content a:hover,
    .entry-content a:focus {
      text-decoration: none
    }

    .entry-content p,
    .entry-content li {
      line-height: 1.4
    }

    .entry-content li img {
      display: inline-block
    }

    .entry-content h1,
    .entry-content h2,
    .entry-content h3,
    .entry-content h4,
    .entry-content h5,
    .entry-content h6 {
      margin: 3.5rem auto 2rem
    }

    .entry-content ul ul,
    .entry-content ol ol,
    .entry-content ul ol,
    .entry-content ol ul {
      margin-bottom: 1rem
    }

    .entry-content hr {
      margin: 4rem auto
    }

    .post-inner .entry-content>.wp-block-cover.alignwide:first-child,
    .post-inner .entry-content>.wp-block-cover.alignfull:first-child {
      margin-top: 0
    }

    .entry-content {
      font-family: NonBreakingSpaceOverride, "Hoefler Text", Garamond, "Times New Roman", serif;
      letter-spacing: normal
    }

    .entry-content h1,
    .entry-content h2,
    .entry-content h3,
    .entry-content h4,
    .entry-content h5,
    .entry-content h6,
    .entry-content cite,
    .entry-content figcaption,
    .entry-content table,
    .entry-content address,
    .entry-content .wp-caption-text,
    .entry-content .wp-block-file {
      font-family: -apple-system, BlinkMacSystemFont, "Helvetica Neue", Helvetica, sans-serif
    }

    @supports (font-variation-settings:normal) {

      .entry-content h1,
      .entry-content h2,
      .entry-content h3,
      .entry-content h4,
      .entry-content h5,
      .entry-content h6,
      .entry-content cite,
      .entry-content figcaption,
      .entry-content table,
      .entry-content address,
      .entry-content .wp-caption-text,
      .entry-content .wp-block-file {
        font-family: "Inter var", -apple-system, BlinkMacSystemFont, "Helvetica Neue", Helvetica, sans-serif
      }
    }

    .entry-content>*:not(.alignwide):not(.alignfull):not(.alignleft):not(.alignright):not(.is-style-wide) {
      max-width: 58rem;
      width: calc(100% - 4rem)
    }

    [class*=__inner-container]>*:not(.alignwide):not(.alignfull):not(.alignleft):not(.alignright):not(.is-style-wide) {
      max-width: 58rem;
      width: 100%
    }

    .alignnone,
    .aligncenter,
    .alignleft,
    .alignright,
    .alignwide {
      margin-top: 4rem;
      margin-right: auto;
      margin-bottom: 4rem;
      margin-left: auto
    }

    [class*=__inner-container]>*:not(.alignwide):not(.alignfull):not(.alignleft):not(.alignright) {
      margin-left: auto;
      margin-right: auto
    }

    .alignfull {
      margin-top: 5rem;
      margin-right: auto;
      margin-bottom: 5rem;
      margin-left: auto;
      max-width: 100vw;
      position: relative;
      width: 100%
    }

    [class*=__inner-container]>.alignfull {
      max-width: 100%
    }

    .alignwide {
      max-width: 120rem;
      position: relative;
      width: calc(100% - 4rem)
    }

    [class*=__inner-container]>.alignwide {
      width: 100%
    }

    .aligncenter,
    .aligncenter img {
      margin-left: auto;
      margin-right: auto
    }

    .alignleft,
    .alignright {
      max-width: 50%
    }

    .alignleft {
      float: left;
      margin: .3rem 2rem 2rem
    }

    .alignright {
      float: right;
      margin: .3rem 2rem 2rem
    }

    [class*=wp-block].alignfull:not(.has-background) [class*=__inner-container]>.alignleft,
    [class*=wp-block].alignfull:not(.has-background) [class*=__inner-container]>p .alignleft,
    [class*=wp-block].alignfull:not(.has-background) [class*=__inner-container]>.wp-block-image .alignleft {
      margin-left: 2rem
    }

    [class*=wp-block].alignfull:not(.has-background) [class*=__inner-container]>.alignright,
    [class*=wp-block].alignfull:not(.has-background) [class*=__inner-container]>p .alignright,
    [class*=wp-block].alignfull:not(.has-background) [class*=__inner-container]>.wp-block-image .alignright {
      margin-right: 2rem
    }

    .alignfull>figcaption,
    .alignfull>.wp-caption-text {
      margin-left: auto;
      margin-right: auto;
      max-width: 58rem;
      width: calc(100% - 4rem)
    }

    .comments-wrapper {
      margin-top: 5rem
    }

    .comment-reply-title {
      margin: 0 0 4rem;
      text-align: center
    }

    .comments .comment,
    .comments .pingback,
    .comments .trackback,
    .comments .review {
      padding-top: 3.5rem
    }

    div.comment:first-of-type {
      margin-top: 3.5rem;
      padding-top: 0
    }

    .comments .comments-header+div {
      margin-top: 0;
      padding-top: 0
    }

    .comment-body {
      position: relative
    }

    .comment .comment {
      padding-left: 5%
    }

    .comment-meta {
      line-height: 1.1;
      margin-bottom: 1.5rem;
      min-height: 5rem;
      padding-left: 5rem;
      position: relative
    }

    .hide-avatars .comment-meta {
      min-height: 0;
      padding-left: 0
    }

    .comment-meta a {
      color: inherit
    }

    .comment-author {
      font-size: 1.8rem;
      font-weight: 700;
      letter-spacing: -.027777778em
    }

    .comment-author a {
      text-decoration: underline
    }

    .comment-author a:hover,
    .comment-author a:focus {
      text-decoration: none
    }

    .comment-meta .avatar {
      height: 4rem;
      position: absolute;
      left: 0;
      top: 0;
      width: 4rem
    }

    .comment-author .url {
      text-decoration: underline
    }

    .comment-metadata {
      color: #6d6d6d;
      font-size: 1.4rem;
      font-weight: 500;
      margin-top: .6rem
    }

    .comment-metadata a {
      text-decoration: none
    }

    .comment-metadata a:focus,
    .comment-metadata a:hover {
      text-decoration: underline
    }

    .comment-content.entry-content>*:not(.alignwide):not(.alignfull):not(.alignleft):not(.alignright):not(.is-style-wide) {
      width: 100%
    }

    .comment-content.entry-content .alignleft {
      margin-left: 0
    }

    .comment-content.entry-content .alignright {
      margin-right: 0
    }

    .comment-footer-meta {
      align-items: center;
      display: flex;
      flex-wrap: wrap;
      font-size: 1.2rem;
      font-weight: 600;
      justify-content: flex-start;
      letter-spacing: .030833333em;
      line-height: 1;
      margin: 1.5rem 0 -1rem -1.5rem;
      text-transform: uppercase
    }

    .comment-footer-meta>* {
      margin: 0 0 1rem 1.5rem
    }

    .comment-reply-link {
      background-color: #cd2653;
      color: #fff;
      display: block;
      padding: .7rem
    }

    .bypostauthor .comment-footer-meta .by-post-author {
      display: block
    }

    .comment-footer-meta a {
      text-decoration: none
    }

    .comment-footer-meta a:focus,
    .comment-footer-meta a:hover {
      text-decoration: underline
    }

    .pingback .comment-meta,
    .trackback .comment-meta {
      padding-left: 0
    }

    .comments-pagination {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      margin-top: 6rem;
      text-align: center
    }

    .comments-pagination.only-next {
      justify-content: flex-end
    }

    .comments-pagination .page-numbers {
      display: none;
      text-decoration: none
    }

    .comments-pagination .page-numbers:focus,
    .comments-pagination .page-numbers:hover {
      text-decoration: underline
    }

    .comments-pagination .prev,
    .comments-pagination .next {
      display: block
    }

    .comments-pagination .prev {
      left: 0
    }

    .comments-pagination .next {
      right: 0;
      text-align: right
    }

    .comment-respond:after {
      clear: both;
      content: "";
      display: block
    }

    .comment-respond .comment-notes,
    .comment-respond .logged-in-as {
      color: #6d6d6d;
      font-size: 1.6rem;
      line-height: 1.4;
      margin: -3rem 0 4rem;
      text-align: center
    }

    .comment-respond .comment-notes a,
    .comment-respond .logged-in-as a {
      color: inherit;
      text-decoration: none
    }

    .comment-respond .comment-notes a:focus,
    .comment-respond .comment-notes a:hover,
    .comment-respond .logged-in-as a:focus,
    .comment-respond .logged-in-as a:hover {
      text-decoration: underline
    }

    .comment-respond p {
      line-height: 1.1;
      margin-bottom: 2rem;
      margin-left: auto;
      margin-right: auto
    }

    .comment-respond p:not(.comment-notes) {
      max-width: 58rem
    }

    .comment-form-cookies-consent {
      align-items: baseline;
      display: flex
    }

    .comment-respond>p:last-of-type {
      margin-bottom: 0
    }

    .comment-respond label {
      display: block
    }

    .comment-respond input[type=checkbox]+label {
      font-size: 1.5rem;
      line-height: 1.25
    }

    .comment-respond input[type=text],
    .comment-respond input[type=email],
    .comment-respond textarea {
      margin-bottom: 0
    }

    .comment-respond textarea {
      height: 15rem
    }

    .comment-respond #submit {
      display: block
    }

    .comment-respond .comments-closed {
      text-align: center
    }

    .comments .comment-respond {
      padding: 3rem 0 0
    }

    .comments .comment-respond .comment-reply-title,
    .comments .comment-respond .comment-notes,
    .comments .comment-respond .logged-in-as {
      text-align: left
    }

    .comment-reply-title small {
      display: block;
      font-size: 1.6rem;
      font-weight: 600;
      letter-spacing: -.0277em;
      margin: .5rem 0 0;
      white-space: nowrap
    }

    .comment-reply-title small a {
      text-decoration: none
    }

    .comment-reply-title small a:focus,
    .comment-reply-title small a:hover {
      text-decoration: underline
    }

    .pagination .nav-links {
      align-items: baseline;
      display: flex;
      flex-wrap: wrap;
      font-size: 1.8rem;
      font-weight: 600;
      margin: -1.5rem 0 0 -2.5rem;
      width: calc(100% + 2.5rem)
    }

    .pagination-separator {
      margin: 5rem 0
    }

    .nav-links>* {
      margin: 1.5rem 0 0 2.5rem
    }

    .nav-links .placeholder {
      display: none;
      visibility: hidden
    }

    .pagination a {
      text-decoration: none
    }

    .pagination a:focus,
    .pagination a:hover {
      text-decoration: underline
    }

    .pagination .dots {
      transform: translateY(-.3em);
      color: #6d6d6d
    }

    .nav-short {
      display: none
    }

    .error404 #site-content {
      padding-top: 4rem
    }

    .error404-content {
      text-align: center
    }

    .error404 #site-content .search-form {
      justify-content: center;
      margin-top: 3rem
    }

    .widget {
      margin-top: 3rem
    }

    .widget:first-child {
      margin-top: 0
    }

    .widget-content>div>*:first-child {
      margin-top: 0
    }

    .widget-content>div>*:last-child {
      margin-bottom: 0
    }

    .widget .widget-title {
      margin: 0 0 2rem
    }

    .widget li {
      margin: 2rem 0 0
    }

    .widget li:first-child,
    .widget li>ul,
    .widget li>ol {
      margin-top: 0
    }

    .widget table,
    .widget table * {
      border-color: #dedfdf
    }

    .widget table caption {
      background-color: #dedfdf
    }

    .widget .post-date,
    .widget .rss-date {
      color: #6d6d6d;
      display: block;
      font-size: .85em;
      font-weight: 500;
      margin-top: .2rem
    }

    .widget select {
      max-width: 100%
    }

    .widget_text p,
    .widget_text ol,
    .widget_text ul,
    .widget_text dl,
    .widget_text dt,
    .widget-content .rssSummary {
      font-family: NonBreakingSpaceOverride, "Hoefler Text", Garamond, "Times New Roman", serif;
      letter-spacing: normal
    }

    .widget-content cite,
    .widget-content figcaption,
    .widget-content .wp-caption-text {
      font-family: -apple-system, BlinkMacSystemFont, "Helvetica Neue", Helvetica, sans-serif
    }

    @supports (font-variation-settings:normal) {

      .widget-content cite,
      .widget-content figcaption,
      .widget-content .wp-caption-text {
        font-family: "Inter var", -apple-system, BlinkMacSystemFont, "Helvetica Neue", Helvetica, sans-serif
      }
    }

    .widget_archive ul,
    .widget_categories ul,
    .widget_pages ul,
    .widget_meta ul,
    .widget_nav_menu ul,
    .widget_recent_comments ul,
    .widget_recent_entries ul,
    .widget_rss ul {
      list-style: none;
      margin: 0
    }

    .widget_archive li,
    .widget_categories li,
    .widget_pages li,
    .widget_meta li,
    .widget_nav_menu li {
      color: #6d6d6d;
      margin: .3rem 0
    }

    .widget_archive li li,
    .widget_categories li li,
    .widget_pages li li,
    .widget_meta li li,
    .widget_nav_menu li li {
      margin-left: 2rem
    }

    .widget_archive a,
    .widget_categories a,
    .widget_pages a,
    .widget_meta a,
    .widget_nav_menu a {
      font-weight: 700;
      text-decoration: none
    }

    .widget_archive a:focus,
    .widget_archive a:hover,
    .widget_categories a:focus,
    .widget_categories a:hover,
    .widget_pages a:focus,
    .widget_pages a:hover,
    .widget_meta a:focus,
    .widget_meta a:hover,
    .widget_nav_menu a:focus,
    .widget_nav_menu a:hover {
      text-decoration: underline
    }

    .calendar_wrap {
      font-size: 2.4rem
    }

    .calendar_wrap th,
    .calendar_wrap td,
    .wp-calendar-nav span {
      display: table-cell;
      font-size: 1em;
      font-weight: 500;
      line-height: 1;
      padding: 2.5% 2.5% 1.75%;
      text-align: center
    }

    .wp-calendar-table {
      margin-bottom: 0
    }

    .wp-calendar-nav {
      display: table;
      width: 100%;
      font-size: 1.8rem
    }

    .calendar_wrap tfoot td {
      border-bottom: none
    }

    .calendar_wrap tfoot a,
    .calendar_wrap .wp-calendar-nav a {
      text-decoration: none
    }

    .calendar_wrap tfoot #prev,
    .calendar_wrap .wp-calendar-nav-prev {
      text-align: left
    }

    .calendar_wrap tfoot #next,
    .calendar_wrap .wp-calendar-nav-next {
      text-align: right
    }

    .widget_media_gallery .gallery {
      margin: 0 -.4em -.8em;
      width: calc(100% + .8em)
    }

    .widget_media_gallery .gallery-item {
      margin: 0 0 .8em;
      padding: 0 .4em
    }

    .widget_nav_menu .widget-content>div>ul {
      margin-left: 0
    }

    .widget_recent_comments li {
      font-weight: 700
    }

    .widget_recent_comments a {
      text-decoration: none
    }

    .widget_recent_comments a:focus,
    .widget_recent_comments a:hover {
      text-decoration: underline
    }

    .widget_recent_entries a {
      font-weight: 700;
      text-decoration: none
    }

    .widget_recent_entries a:focus,
    .widget_recent_entries a:hover {
      text-decoration: underline
    }

    .widget_rss .widget-title a.rsswidget:first-of-type {
      display: none
    }

    .widget_rss .rsswidget {
      font-weight: 700
    }

    .widget_rss a {
      text-decoration: none
    }

    .widget_rss a:focus,
    .widget_rss a:hover {
      text-decoration: underline
    }

    .widget_rss .rssSummary {
      margin-top: .5rem
    }

    .widget_rss cite:before {
      content: "— "
    }

    .widget_search .search-field {
      border-color: #dedfdf
    }

    .widget_tag_cloud a {
      font-weight: 700;
      margin-right: .5rem;
      text-decoration: none;
      white-space: nowrap
    }

    .widget_tag_cloud a:focus,
    .widget_tag_cloud a:hover {
      text-decoration: underline
    }

    .footer-nav-widgets-wrapper,
    #site-footer {
      background-color: #fff;
      border-color: #dedfdf;
      border-style: solid;
      border-width: 0
    }

    .footer-top-visible .footer-nav-widgets-wrapper,
    .footer-top-hidden #site-footer {
      margin-top: 5rem
    }

    .reduced-spacing.footer-top-visible .footer-nav-widgets-wrapper,
    .reduced-spacing.footer-top-hidden #site-footer {
      border-top-width: .1rem
    }

    .footer-top,
    .footer-widgets-outer-wrapper,
    #site-footer {
      padding: 3rem 0
    }

    .footer-top {
      display: flex;
      border-bottom: .1rem solid #dedfdf;
      justify-content: space-between
    }

    .footer-menu {
      font-size: 1.8rem;
      font-weight: 700;
      letter-spacing: -.0277em
    }

    .footer-menu li {
      line-height: 1.25;
      margin: .25em 0 0
    }

    .footer-menu a {
      text-decoration: none;
      word-break: normal;
      word-wrap: normal
    }

    .footer-menu a:hover,
    .footer-menu a:focus {
      text-decoration: underline
    }

    .footer-social-wrapper {
      margin: 0;
      width: 100%
    }

    .has-footer-menu .footer-social-wrapper {
      flex-shrink: 0;
      margin-left: 1rem;
      width: 50%
    }

    ul.footer-social {
      margin: -.5rem 0 0 -.5rem
    }

    .has-footer-menu .footer-social {
      justify-content: flex-end
    }

    ul.footer-social li {
      margin: .5rem 0 0 .5rem
    }

    .footer-social a {
      background-color: #cd2653;
      height: 3.6rem;
      width: 3.6rem
    }

    .footer-social a:before {
      font-size: 1.6rem
    }

    .footer-widgets-outer-wrapper {
      border-bottom: .1rem solid #dedfdf
    }

    .footer-widgets+.footer-widgets {
      margin-top: 3rem
    }

    #site-footer {
      font-size: 1.6rem
    }

    #site-footer .section-inner {
      align-items: baseline;
      display: flex;
      justify-content: space-between
    }

    #site-footer a {
      text-decoration: none
    }

    #site-footer a:focus,
    #site-footer a:hover {
      text-decoration: underline
    }

    .footer-copyright a,
    .powered-by-wordpress a {
      color: inherit
    }

    .powered-by-wordpress,
    .to-the-top {
      color: #6d6d6d
    }

    a.to-the-top>* {
      pointer-events: none
    }

    .footer-copyright {
      font-weight: 600;
      margin: 0
    }

    .powered-by-wordpress {
      display: none;
      margin: 0 0 0 2.4rem
    }

    .to-the-top-long {
      display: none
    }

    @media (max-width:479px) {

      .wp-block-pullquote.alignleft,
      .wp-block-pullquote.alignright {
        float: none
      }

      ul,
      ol {
        margin: 0 0 3rem 2rem
      }

      li {
        margin: .5rem 0 0 1rem
      }

      .post-nav-links {
        margin: 3em 0 0
      }
    }

    @media (min-width:480px) {

      .wp-block-pullquote.alignleft,
      .wp-block-pullquote.alignright,
      .wp-block-cover-image.alignleft,
      .wp-block-cover-image.alignright,
      .wp-block-cover.alignleft,
      .wp-block-cover.alignright,
      .wp-block-embed.alignleft,
      .wp-block-embed.alignright,
      .wp-block-gallery.alignleft,
      .wp-block-gallery.alignright {
        max-width: 26rem
      }

      .wp-block-table.alignleft,
      .wp-block-table.alignright {
        max-width: 100%
      }

      .alignleft,
      .alignright {
        max-width: 26rem
      }

      .post-nav-links {
        margin: 3em 0 0
      }
    }

    @media (max-width:599px) {
      .wp-block-column:last-child {
        margin-bottom: 0
      }

      .wp-block-columns+.wp-block-columns {
        margin-top: .2rem
      }

      .wp-block-columns.alignwide+.wp-block-columns.alignwide {
        margin-top: -.8rem
      }

      .wp-block-columns.alignfull+.wp-block-columns.alignfull {
        margin-top: -1.8rem
      }

      .template-cover .post-inner .post-meta-wrapper,
      .template-cover .post-inner .author-bio {
        width: calc(100% - 4rem)
      }

      .post-nav-links {
        margin: 3em 0 0
      }
    }

    @media (min-width:600px) {

      .wp-block-columns.alignwide+.wp-block-columns.alignwide,
      .wp-block-columns.alignfull+.wp-block-columns.alignfull {
        margin-top: -4rem
      }

      .post-nav-links {
        margin: 3em 0 0
      }
    }

    @media (min-width:660px) {
      figure.wp-block-gallery.alignleft {
        margin-left: calc((100vw - 58rem - 8rem)/-2)
      }

      figure.wp-block-gallery.alignright {
        margin-right: calc((100vw - 58rem - 8rem)/-2)
      }

      .entry-content>.alignleft {
        margin-left: 4rem
      }

      .entry-content>p .alignleft,
      .entry-content>.wp-block-image .alignleft {
        margin-left: calc((100vw - 58rem - 8rem)/-2)
      }

      [class*=wp-block]:not(.alignwide):not(.alignfull) [class*=__inner-container]>.alignleft,
      [class*=wp-block]:not(.alignwide):not(.alignfull) [class*=__inner-container]>p .alignleft,
      [class*=wp-block]:not(.alignwide):not(.alignfull) [class*=__inner-container]>.wp-block-image .alignleft {
        margin-left: 0
      }

      .entry-content>.alignright {
        margin-right: 4rem
      }

      .entry-content>p .alignright,
      .entry-content>.wp-block-image .alignright {
        margin-right: calc((100vw - 58rem - 8rem)/-2)
      }

      [class*=wp-block]:not(.alignwide):not(.alignfull) [class*=__inner-container]>.alignright,
      [class*=wp-block]:not(.alignwide):not(.alignfull) [class*=__inner-container]>p .alignright,
      [class*=wp-block]:not(.alignwide):not(.alignfull) [class*=__inner-container]>.wp-block-image .alignright {
        margin-right: 0
      }

      .post-nav-links {
        margin: 3em auto 0 auto
      }
    }

    @media (min-width:700px) {

      ul,
      ol {
        margin-bottom: 4rem
      }

      pre {
        padding: 3rem
      }

      hr {
        margin: 8rem auto
      }

      table {
        font-size: 1.8rem
      }

      .gallery-columns-2 .gallery-item {
        max-width: 50%
      }

      .gallery-columns-3 .gallery-item {
        max-width: 33.33%
      }

      .gallery-columns-4 .gallery-item {
        max-width: 25%
      }

      .gallery-columns-5 .gallery-item {
        max-width: 20%
      }

      .gallery-columns-6 .gallery-item {
        max-width: 16.66%
      }

      .gallery-columns-7 .gallery-item {
        max-width: 14.28%
      }

      .gallery-columns-8 .gallery-item {
        max-width: 12.5%
      }

      .gallery-columns-9 .gallery-item {
        max-width: 11.11%
      }

      h1,
      .heading-size-1,
      h2,
      .heading-size-2,
      h3,
      .heading-size-3 {
        margin: 6rem auto 3rem
      }

      h4,
      .heading-size-4,
      h5,
      .heading-size-5,
      h6,
      .heading-size-6 {
        margin: 4.5rem auto 2.5rem
      }

      h1,
      .heading-size-1 {
        font-size: 6.4rem
      }

      h2,
      .heading-size-2 {
        font-size: 4.8rem
      }

      h3,
      .heading-size-3 {
        font-size: 4rem
      }

      h4,
      .heading-size-4 {
        font-size: 3.2rem
      }

      h5,
      .heading-size-5 {
        font-size: 2.4rem
      }

      h6,
      .heading-size-6 {
        font-size: 1.8rem
      }

      fieldset {
        padding: 3rem
      }

      legend {
        padding: 0 1.5rem
      }

      button,
      .button,
      .faux-button,
      .wp-block-button__link,
      input[type=button],
      input[type=reset],
      input[type=submit] {
        font-size: 1.7rem
      }

      figcaption,
      .wp-caption-text {
        margin-top: 1.8rem
      }

      section {
        padding: 8rem 0
      }

      .section-inner {
        width: calc(100% - 8rem)
      }

      .header-inner {
        padding: 3.8rem 0
      }

      .site-title {
        font-size: 2.4rem;
        font-weight: 700
      }

      .site-description {
        display: block
      }

      .site-logo img {
        max-height: 9rem;
        transition: height .15s linear, width .15s linear, max-height .15s linear
      }

      .toggle-inner .toggle-text {
        font-size: 1.2rem
      }

      .search-toggle {
        left: 2rem
      }

      .nav-toggle {
        right: 2rem
      }

      button.close-nav-toggle {
        font-size: 1.8rem;
        padding: 4rem 0
      }

      button.close-nav-toggle svg {
        height: 2rem;
        width: 2rem
      }

      button.close-nav-toggle .toggle-text {
        margin-right: 2.1rem
      }

      .modal-menu {
        left: auto;
        width: 100%
      }

      .modal-menu>li>a,
      .modal-menu>li>.ancestor-wrapper>a {
        font-size: 2.4rem;
        padding: 2.5rem 0
      }

      .modal-menu ul li {
        border-left-color: transparent
      }

      .modal-menu>li>.ancestor-wrapper>button.sub-menu-toggle {
        padding: 0 3rem
      }

      .modal-menu>li>.ancestor-wrapper>button.sub-menu-toggle svg {
        height: 1.1rem;
        width: 1.8rem
      }

      .menu-bottom {
        align-items: center;
        display: flex;
        justify-content: space-between;
        padding: 4.4rem 0
      }

      .menu-copyright {
        display: block;
        flex-shrink: 0;
        margin-right: 4rem
      }

      .search-modal form {
        position: relative;
        width: 100%
      }

      .search-untoggle svg {
        height: 2.5rem;
        width: 2.5rem
      }

      .search-modal .search-field {
        border: none;
        font-size: 3.2rem;
        height: 14rem
      }

      .search-modal .search-field::-moz-placeholder {
        line-height: 4.375
      }

      .featured-media figcaption {
        margin: 2rem auto 0 auto;
        width: calc(100% - 8rem)
      }

      .cover-header-inner {
        padding: 18rem 0 8rem
      }

      .to-the-content-wrapper {
        top: calc(100% + 1.8rem)
      }

      .to-the-content {
        height: 6rem
      }

      .to-the-content svg {
        height: 2.4rem;
        width: 2.12rem
      }

      body.template-full-width .entry-content>*:not(.alignwide):not(.alignfull):not(.alignleft):not(.alignright):not(.is-style-wide) {
        width: calc(100% - 8rem)
      }

      body.template-full-width .alignfull:not(.has-background)>.wp-block-group__inner-container>p:not(.has-background-color) {
        padding-left: 4rem;
        padding-right: 4rem
      }

      body.template-full-width [class*=wp-block].alignfull [class*=__inner-container]>.alignleft,
      body.template-full-width [class*=wp-block].alignfull [class*=__inner-container]>p .alignleft,
      body.template-full-width [class*=wp-block].alignfull [class*=__inner-container]>.wp-block-image .alignleft {
        margin-left: 4rem
      }

      body.template-full-width [class*=wp-block].alignfull [class*=__inner-container]>.alignright,
      body.template-full-width [class*=wp-block].alignfull [class*=__inner-container]>p .alignright,
      body.template-full-width [class*=wp-block].alignfull [class*=__inner-container]>.wp-block-image .alignright {
        margin-right: 4rem
      }

      .archive-header {
        padding: 8rem 0
      }

      .reduced-spacing .archive-header {
        padding-bottom: 3rem
      }

      .archive-title {
        font-size: 3.2rem
      }

      body:not(.singular) main>article:first-of-type {
        padding: 8rem 0 0
      }

      h2.entry-title {
        font-size: 6.4rem
      }

      .no-search-results-form {
        padding-top: 8rem
      }

      .singular .entry-header {
        padding: 8rem 0
      }

      .entry-categories {
        margin-bottom: 3rem
      }

      .entry-categories-inner {
        margin: -1rem 0 0 -2rem
      }

      .entry-categories a {
        font-size: 1.5rem;
        margin: 1rem 0 0 2rem
      }

      .intro-text {
        font-size: 2rem;
        margin-top: 2.5rem
      }

      .singular .intro-text {
        font-size: 2.6rem
      }

      .post-meta-wrapper {
        margin-top: 3rem
      }

      .post-meta {
        font-size: 1.6rem;
        margin: -1.4rem 0 0 -3rem
      }

      .post-meta li {
        margin: 1.4rem 0 0 3rem;
        max-width: calc(100% - 3rem)
      }

      .featured-media {
        margin-top: 6rem
      }

      .post-inner {
        padding-top: 8rem
      }

      .post-meta-wrapper.post-meta-single-bottom {
        margin-top: 4rem
      }

      .author-bio {
        margin-top: 8rem;
        min-height: 8rem;
        padding-left: 10rem;
        position: relative
      }

      .author-bio .avatar {
        position: absolute;
        left: 0;
        top: 0;
        height: 8rem;
        width: 8rem
      }

      .pagination-single {
        font-size: 2.4rem;
        margin-top: 8rem
      }

      .pagination-single-inner {
        flex-direction: row;
        justify-content: space-between
      }

      .pagination-single.only-next .pagination-single-inner {
        justify-content: flex-end
      }

      .pagination-single hr:first-child {
        margin: 0 0 4rem
      }

      .pagination-single hr:last-child {
        margin: 4rem 0 .8rem
      }

      .pagination-single a+a {
        margin: 0 0 0 4rem
      }

      .pagination-single a .arrow {
        margin: 0 2rem 0 0
      }

      .pagination-single .next-post {
        flex-direction: row-reverse;
        text-align: right
      }

      .pagination-single .next-post .arrow {
        margin: 0 0 0 2rem
      }

      .wp-block-embed figcaption,
      .wp-block-image figcaption {
        font-size: 1.6rem
      }

      .wp-block-archives:not(.alignwide):not(.alignfull),
      .wp-block-categories:not(.alignwide):not(.alignfull),
      .wp-block-code,
      .wp-block-columns:not(.alignwide):not(.alignfull),
      .wp-block-cover:not(.alignwide):not(.alignfull):not(.alignleft):not(.alignright):not(.aligncenter),
      .wp-block-embed:not(.alignwide):not(.alignfull):not(.alignleft):not(.alignright):not(.aligncenter),
      .wp-block-gallery:not(.alignwide):not(.alignfull):not(.alignleft):not(.alignright):not(.aligncenter),
      .wp-block-group:not(.has-background):not(.alignwide):not(.alignfull),
      .wp-block-image:not(.alignwide):not(.alignfull):not(.alignleft):not(.alignright):not(.aligncenter),
      .wp-block-latest-comments:not(.aligncenter):not(.alignleft):not(.alignright),
      .wp-block-latest-posts:not(.aligncenter):not(.alignleft):not(.alignright),
      .wp-block-media-text:not(.alignwide):not(.alignfull),
      .wp-block-preformatted,
      .wp-block-pullquote:not(.alignwide):not(.alignfull):not(.alignleft):not(.alignright),
      .wp-block-quote,
      .wp-block-quote.is-large,
      .wp-block-quote.is-style-large,
      .wp-block-verse,
      .wp-block-video:not(.alignwide):not(.alignfull) {
        margin-bottom: 4rem;
        margin-top: 4rem
      }

      .wp-block-columns.alignwide+.wp-block-columns.alignwide,
      .wp-block-columns.alignfull+.wp-block-columns.alignfull {
        margin-top: -6rem
      }

      .entry-content .wp-block-columns h1,
      .entry-content .wp-block-columns h2,
      .entry-content .wp-block-columns h3,
      .entry-content .wp-block-columns h4,
      .entry-content .wp-block-columns h5,
      .entry-content .wp-block-columns h6 {
        margin: 3.5rem 0 2rem
      }

      .wp-block-cover-image .wp-block-cover__inner-container,
      .wp-block-cover .wp-block-cover__inner-container {
        width: calc(100% - 8rem)
      }

      .wp-block-cover-image h2,
      .wp-block-cover h2 {
        font-size: 4.8rem
      }

      figure.wp-block-gallery.alignnone,
      figure.wp-block-gallery.aligncenter {
        margin-bottom: 4rem;
        margin-top: 4rem
      }

      figure.wp-block-gallery.alignwide,
      figure.wp-block-gallery.alignfull {
        margin-bottom: 6rem;
        margin-top: 6rem
      }

      .wp-block-group.has-background {
        padding: 4rem;
        margin-top: 0;
        margin-bottom: 0
      }

      .alignfull:not(.has-background)>.wp-block-group__inner-container>p:not(.has-background-color) {
        padding-left: 0;
        padding-right: 0
      }

      .wp-block-media-text .wp-block-media-text__content {
        padding: 4rem
      }

      .wp-block-pullquote blockquote p {
        font-size: 3.2rem
      }

      .wp-block-pullquote cite {
        margin-top: 2rem
      }

      .wp-block-pullquote.alignfull:not(.is-style-solid-color) {
        padding-left: 1rem;
        padding-right: 1rem
      }

      .wp-block-pullquote.alignwide:before,
      .wp-block-pullquote.alignfull:before {
        font-size: 11.272727272rem;
        height: 8rem;
        margin-bottom: 2rem;
        width: 8rem
      }

      .wp-block-pullquote.alignwide blockquote p,
      .wp-block-pullquote.alignfull blockquote p {
        font-size: 4.8rem;
        line-height: 1.203125
      }

      .wp-block-pullquote.alignleft p,
      .wp-block-pullquote.alignright p,
      .wp-block-pullquote.alignleft.is-style-solid-color blockquote p,
      .wp-block-pullquote.alignright.is-style-solid-color blockquote p {
        font-size: 3.2rem;
        line-height: 1.1875
      }

      .wp-block-pullquote.is-style-solid-color.alignwide,
      .wp-block-pullquote.is-style-solid-color.alignfull {
        padding: 6rem 4rem 4rem
      }

      .wp-block-pullquote.alignleft.is-style-solid-color blockquote p,
      .wp-block-pullquote.alignright.is-style-solid-color blockquote p {
        font-size: 2.6rem
      }

      .wp-block-quote.is-large p,
      .wp-block-quote.is-style-large p {
        font-size: 2.8rem
      }

      hr.wp-block-separator {
        margin: 6rem auto
      }

      .wp-block-separator.is-style-wide {
        max-width: calc(100vw - 8rem)
      }

      .entry-content {
        font-size: 2.1rem
      }

      .entry-content p,
      .entry-content li {
        line-height: 1.476
      }

      .entry-content h1,
      .entry-content h2,
      .entry-content h3 {
        margin: 6rem auto 3rem
      }

      .entry-content h4,
      .entry-content h5,
      .entry-content h6 {
        margin: 4.5rem auto 2.5rem
      }

      .alignnone,
      .aligncenter {
        margin-bottom: 4rem;
        margin-top: 4rem
      }

      .alignleft {
        margin: .3rem 2rem 2rem 0
      }

      .alignright {
        margin: .3rem 0 2rem 2rem
      }

      .entry-content>.alignwide:not(.wp-block-group.has-background),
      .entry-content>.alignfull:not(.wp-block-group.has-background) {
        margin-bottom: 6rem;
        margin-top: 6rem
      }

      .entry-content>.alignwide {
        max-width: calc(100vw - 8rem);
        width: calc(100vw - 8rem)
      }

      [class*=wp-block].alignfull:not(.has-background) [class*=__inner-container]>.alignleft,
      [class*=wp-block].alignfull:not(.has-background) [class*=__inner-container]>p .alignleft,
      [class*=wp-block].alignfull:not(.has-background) [class*=__inner-container]>.wp-block-image .alignleft {
        margin-left: 4rem
      }

      [class*=wp-block].alignfull:not(.has-background) [class*=__inner-container]>.alignright,
      [class*=wp-block].alignfull:not(.has-background) [class*=__inner-container]>p .alignright,
      [class*=wp-block].alignfull:not(.has-background) [class*=__inner-container]>.wp-block-image .alignright {
        margin-right: 4rem
      }

      .entry-content>.alignwide:first-child,
      .entry-content>.alignfull:first-child {
        margin-bottom: 8rem
      }

      .alignfull>figcaption,
      .alignfull>.wp-caption-text {
        width: calc(100% - 8rem)
      }

      .comments-wrapper {
        margin-top: 8rem
      }

      .comment-reply-title {
        margin-bottom: 4.6rem
      }

      .comment-respond p.comment-notes,
      .comment-respond p.logged-in-as {
        font-size: 1.8rem;
        letter-spacing: -.025em;
        margin: -2.5rem 0 4.4rem
      }

      .comments .comment,
      .comments .pingback,
      .comments .trackback,
      .comments .review {
        padding-top: 5rem
      }

      div.comment:first-of-type {
        margin-top: 5rem
      }

      .comment-meta {
        margin-bottom: 2rem;
        min-height: 6rem;
        padding: .3rem 0 0 7.5rem
      }

      .comment-meta .avatar {
        display: block;
        height: 6rem;
        position: absolute;
        left: 0;
        top: 0;
        width: 6rem
      }

      .comment-author {
        font-size: 2.4rem
      }

      .comment-metadata {
        font-size: 1.6rem;
        margin-top: .8rem
      }

      .comment-footer-meta {
        margin-top: 2.5rem
      }

      .comments-pagination {
        margin-top: 8rem
      }

      .pingback .comment-body {
        padding: 0
      }

      .comment-respond p {
        margin-bottom: 2.5rem
      }

      .comment-form p.logged-in-as {
        margin: -2.5rem 0 4.4rem
      }

      .comment-respond .comment-form-author,
      .comment-respond .comment-form-email {
        float: left;
        width: calc(50% - 1rem)
      }

      .comment-respond .comment-form-email {
        margin-left: 2rem
      }

      .comments .comment-respond {
        padding: 5rem 0 0
      }

      .comment-reply-title small {
        display: inline;
        margin: 0 0 0 .5rem
      }

      .pagination-separator {
        margin: 8rem 0
      }

      .nav-short {
        display: inline
      }

      .pagination .nav-links {
        font-size: 2.4rem;
        font-weight: 700;
        margin: -2.5rem 0 0 -4rem
      }

      .nav-links>* {
        margin: 2.5rem 0 0 4rem
      }

      .error404 #site-content {
        padding-top: 8rem
      }

      .widget .widget-title {
        margin-bottom: 3rem
      }

      .footer-top-visible .footer-nav-widgets-wrapper,
      .footer-top-hidden #site-footer {
        margin-top: 8rem
      }

      .footer-top {
        padding: 3.7rem 0
      }

      .footer-menu {
        font-size: 2.4rem;
        margin: -.8rem 0 0 -1.6rem
      }

      .footer-menu li {
        margin: .8rem 0 0 1.6rem
      }

      .has-footer-menu .footer-social-wrapper {
        flex: 1;
        margin-left: 4rem;
        width: auto
      }

      .footer-widgets-outer-wrapper {
        padding: 8rem 0
      }

      .footer-widgets-wrapper {
        display: flex;
        justify-content: space-between;
        margin-left: -4rem;
        width: calc(100% + 4rem)
      }

      .footer-widgets {
        margin-left: 4rem;
        width: 50%
      }

      .footer-widgets+.footer-widgets {
        margin-top: 0
      }

      .footer-widgets .widget {
        border-top: none;
        margin-top: 5rem;
        padding-top: 0
      }

      .footer-widgets .widget:first-child {
        margin-top: 0
      }

      #site-footer {
        font-size: 1.8rem;
        padding: 4.3rem 0
      }

      .footer-credits {
        display: flex
      }

      .footer-copyright {
        font-weight: 700
      }

      .powered-by-wordpress {
        display: block
      }

      .to-the-top-long {
        display: inline
      }

      .to-the-top-short {
        display: none
      }
    }

    @media (min-width:782px) {
      .wp-block-column {
        margin-bottom: 0
      }

      .wp-block-columns.alignwide+.wp-block-columns.alignwide,
      .wp-block-columns.alignfull+.wp-block-columns.alignfull {
        margin-top: -2.8rem
      }
    }

    @media (min-width:1000px) {
      #site-header {
        z-index: 2
      }

      .header-inner {
        align-items: center;
        display: flex;
        justify-content: space-between;
        padding: 2.8rem 0
      }

      .header-titles-wrapper {
        margin-right: 4rem;
        max-width: 50%;
        padding: 0;
        text-align: left
      }

      .header-titles {
        align-items: baseline;
        display: flex;
        flex-wrap: wrap;
        justify-content: flex-start;
        margin: -1rem 0 0 -2.4rem
      }

      .header-titles .site-title,
      .header-titles .site-logo,
      .header-titles .site-description {
        margin: 1rem 0 0 2.4rem
      }

      .wp-custom-logo .header-titles {
        align-items: center
      }

      .header-navigation-wrapper {
        align-items: center;
        display: flex
      }

      .primary-menu-wrapper {
        display: block;
        width: 100%
      }

      .mobile-search-toggle,
      .mobile-nav-toggle {
        display: none !important
      }

      .primary-menu-wrapper+.header-toggles {
        margin-left: 3rem
      }

      .header-toggles {
        display: flex;
        flex-shrink: 0;
        margin-right: -3rem
      }

      .header-inner .toggle {
        height: 4.4rem;
        padding: 0 3rem;
        position: relative;
        bottom: auto;
        left: auto;
        right: auto;
        top: auto;
        width: auto
      }

      .header-inner .toggle-wrapper {
        position: relative
      }

      .header-inner .toggle-wrapper:before {
        background: #dedfdf;
        content: "";
        display: block;
        height: 2.7rem;
        position: absolute;
        left: 0;
        top: calc(50% - 1.35rem);
        width: .1rem
      }

      .header-inner .toggle-wrapper:first-child:before {
        content: none
      }

      .header-inner .primary-menu-wrapper+.header-toggles .toggle-wrapper:first-child:before {
        content: ""
      }

      .nav-toggle-wrapper:not(.has-expanded-menu) {
        display: none
      }

      .toggle-inner {
        position: static
      }

      .toggle-inner .toggle-text {
        left: 0;
        right: 0;
        text-align: center;
        top: calc(100% - .3rem);
        width: auto
      }

      .header-toggles:only-child .nav-toggle .toggle-inner {
        padding-top: 0
      }

      .header-toggles:only-child .toggle-inner {
        display: flex;
        flex-wrap: nowrap;
        align-items: center
      }

      .header-toggles:only-child .toggle-inner .svg-icon {
        order: 1
      }

      .header-toggles:only-child .toggle-inner .toggle-text {
        position: static;
        padding-right: 20px;
        font-size: 15px;
        color: inherit
      }

      .menu-modal {
        opacity: 1;
        justify-content: flex-end;
        padding: 0;
        transition: background-color .3s ease-in, left 0s .3s, right 0s .3s
      }

      .menu-modal.cover-modal {
        background: rgba(0, 0, 0, 0)
      }

      .menu-modal.active {
        background: rgba(0, 0, 0, .2);
        transition: background-color .3s ease-out
      }

      .menu-wrapper.section-inner {
        width: calc(100% - 8rem)
      }

      .menu-modal-inner {
        box-shadow: 0 0 2rem 0 rgba(0, 0, 0, .1);
        opacity: 0;
        padding: 0;
        transform: translateX(20rem);
        transition: transform .2s ease-in, opacity .2s ease-in;
        width: 50rem
      }

      .menu-modal.active .menu-modal-inner {
        opacity: 1;
        transform: translateX(0);
        transition-timing-function: ease-out
      }

      .mobile-menu {
        display: none
      }

      .expanded-menu {
        display: block
      }

      .menu-bottom {
        padding: 6rem 0
      }

      .menu-bottom .social-menu {
        justify-content: flex-start
      }

      .featured-media figcaption {
        width: 100%
      }

      .template-full-width .wp-block-image .alignleft {
        margin-right: 2rem
      }

      .template-full-width .wp-block-image .alignright {
        margin-left: 2rem
      }

      .singular .intro-text {
        font-size: 2.8rem
      }

      .wp-block-columns.alignwide+.wp-block-columns.alignwide,
      .wp-block-columns.alignfull+.wp-block-columns.alignfull {
        margin-top: -4.8rem
      }

      figure.wp-block-gallery.alignwide,
      figure.wp-block-gallery.alignfull {
        margin-bottom: 8rem;
        margin-top: 8rem
      }

      .entry-content>.wp-block-group.alignwide.has-background,
      .entry-content>.wp-block-group.alignfull.has-background {
        padding: 8rem 4rem;
        margin-bottom: 0;
        margin-top: 0
      }

      .wp-block-image .alignleft {
        margin-right: 0
      }

      .wp-block-image .alignright {
        margin-left: 0
      }

      .wp-block-image .aligncenter figcaption {
        text-align: center
      }

      hr.wp-block-separator {
        margin: 8rem auto
      }

      .entry-content>.alignleft,
      .entry-content>p .alignleft,
      .entry-content>.wp-block-image .alignleft {
        position: absolute;
        right: calc((100vw - 58rem)/2 + 58rem + 2rem);
        max-width: calc((100% - 58rem)/2 - 6rem)
      }

      [class*=wp-block]:not(.alignwide):not(.alignfull) [class*=__inner-container]>.alignleft,
      [class*=wp-block]:not(.alignwide):not(.alignfull) [class*=__inner-container]>p .alignleft,
      [class*=wp-block]:not(.alignwide):not(.alignfull) [class*=__inner-container]>.wp-block-image .alignleft {
        position: relative;
        right: inherit;
        max-width: inherit
      }

      [class*=wp-block].alignwide [class*=__inner-container]>.alignleft,
      [class*=wp-block].alignwide [class*=__inner-container]>p .alignleft,
      [class*=wp-block].alignwide [class*=__inner-container]>.wp-block-image .alignleft,
      [class*=wp-block].alignfull [class*=__inner-container]>.alignleft,
      [class*=wp-block].alignfull [class*=__inner-container]>p .alignleft,
      [class*=wp-block].alignfull [class*=__inner-container]>.wp-block-image .alignleft {
        position: absolute;
        right: calc((100% - 58rem)/2 + 58rem + 4rem);
        max-width: calc((100% - 58rem)/2 - 4rem)
      }

      [class*=wp-block].alignwide.has-background [class*=__inner-container]>.alignleft,
      [class*=wp-block].alignwide.has-background [class*=__inner-container]>p .alignleft,
      [class*=wp-block].alignwide.has-background [class*=__inner-container]>.wp-block-image .alignleft {
        right: calc((100% - 58rem)/2 + 58rem)
      }

      [class*=wp-block].alignfull [class*=__inner-container]>.alignleft,
      [class*=wp-block].alignfull [class*=__inner-container]>p .alignleft,
      [class*=wp-block].alignfull [class*=__inner-container]>.wp-block-image .alignleft {
        margin-left: 4rem
      }

      .entry-content>.alignright,
      .entry-content>p .alignright,
      .entry-content>.wp-block-image .alignright,
      [class*=__inner-container]>.alignright {
        position: absolute;
        left: calc((100vw - 58rem)/2 + 58rem + 2rem);
        max-width: calc((100% - 58rem)/2 - 6rem)
      }

      [class*=wp-block]:not(.alignwide):not(.alignfull) [class*=__inner-container]>.alignright,
      [class*=wp-block]:not(.alignwide):not(.alignfull) [class*=__inner-container]>p .alignright,
      [class*=wp-block]:not(.alignwide):not(.alignfull) [class*=__inner-container]>.wp-block-image .alignright {
        position: relative;
        left: inherit;
        max-width: inherit
      }

      [class*=wp-block].alignwide [class*=__inner-container]>.alignright,
      [class*=wp-block].alignwide [class*=__inner-container]>p .alignright,
      [class*=wp-block].alignwide [class*=__inner-container]>.wp-block-image .alignright,
      [class*=wp-block].alignfull [class*=__inner-container]>.alignright,
      [class*=wp-block].alignfull [class*=__inner-container]>p .alignright,
      [class*=wp-block].alignfull [class*=__inner-container]>.wp-block-image .alignright {
        position: absolute;
        left: calc((100% - 58rem)/2 + 58rem + 4rem);
        max-width: calc((100% - 58rem)/2 - 4rem)
      }

      [class*=wp-block].alignwide.has-background [class*=__inner-container]>.alignright,
      [class*=wp-block].alignwide.has-background [class*=__inner-container]>p .alignright,
      [class*=wp-block].alignwide.has-background [class*=__inner-container]>.wp-block-image .alignright {
        left: calc((100% - 58rem)/2 + 58rem + 4rem)
      }

      [class*=wp-block].alignfull [class*=__inner-container]>.alignright,
      [class*=wp-block].alignfull [class*=__inner-container]>p .alignright,
      [class*=wp-block].alignfull [class*=__inner-container]>.wp-block-image .alignright {
        margin-right: 4rem
      }

      .entry-content>.alignwide:not(.wp-block-group.has-background),
      .entry-content>.alignfull:not(.wp-block-group.has-background) {
        margin-bottom: 8rem;
        margin-top: 8rem
      }

      .alignfull>figcaption,
      .alignfull>.wp-caption-text {
        width: calc(100% - 10rem)
      }

      .comment-meta {
        padding-left: 0
      }

      .comment-meta .avatar {
        left: -8rem
      }

      .pagination .nav-links {
        justify-content: space-between;
        margin: 0;
        width: 100%
      }

      .nav-links>* {
        margin: 0 2rem
      }

      .pagination .next,
      .pagination .prev {
        display: block
      }

      .pagination .prev {
        margin: 0 auto 0 0
      }

      .pagination .next {
        text-align: right;
        margin: 0 0 0 auto
      }

      .footer-top {
        align-items: center
      }

      .footer-menu {
        align-items: baseline;
        display: flex;
        justify-content: flex-start;
        flex-wrap: wrap;
        font-size: 2.1rem;
        margin: -1.2rem 0 0 -2.4rem
      }

      .footer-menu li {
        margin: 1.2rem 0 0 2.4rem
      }
    }

    @media (min-width:1220px) {

      h1,
      .heading-size-1 {
        font-size: 8.4rem
      }

      ul.primary-menu {
        margin: -.8rem 0 0 -2.5rem
      }

      .primary-menu>li {
        margin: .8rem 0 0 2.5rem
      }

      .primary-menu-wrapper+.header-toggles {
        margin-left: 4rem
      }

      .header-toggles {
        margin-right: -4rem
      }

      .header-toggles .toggle {
        padding: 0 4rem
      }

      .cover-header+.post-inner {
        padding-top: 10rem
      }

      .singular .intro-text {
        font-size: 3.2rem;
        letter-spacing: -.03125em;
        line-height: 1.375
      }

      .wp-block-columns.alignfull+.wp-block-columns.alignfull {
        margin-top: -6rem
      }

      figure.wp-block-gallery.alignfull {
        margin-bottom: 10rem;
        margin-top: 10rem
      }

      .entry-content>.wp-block-group.alignwide.has-background,
      .entry-content>.wp-block-group.alignfull.has-background {
        padding: 8rem 6rem;
        margin-bottom: 0;
        margin-top: 0
      }

      .wp-block-pullquote.alignwide blockquote p,
      .wp-block-pullquote.alignfull blockquote p {
        font-size: 6.4rem
      }

      .wp-block-pullquote.is-style-solid-color.alignwide,
      .wp-block-pullquote.is-style-solid-color.alignfull {
        padding: 9rem 4rem 8rem
      }

      .entry-content>.alignfull {
        margin-bottom: 10rem;
        margin-top: 10rem
      }

      [class*=wp-block].alignwide.has-background [class*=__inner-container]>.alignleft,
      [class*=wp-block].alignwide.has-background [class*=__inner-container]>p .alignleft,
      [class*=wp-block].alignwide.has-background [class*=__inner-container]>.wp-block-image .alignleft {
        right: calc((100% - 58rem)/2 + 58rem - 2rem)
      }

      [class*=wp-block].alignwide.has-background [class*=__inner-container]>.alignright,
      [class*=wp-block].alignwide.has-background [class*=__inner-container]>p .alignright,
      [class*=wp-block].alignwide.has-background [class*=__inner-container]>.wp-block-image .alignright {
        left: calc((100% - 58rem)/2 + 58rem + 6rem)
      }

      .comment-reply-title {
        font-size: 5.6rem;
        line-height: 1.2;
        margin-bottom: 6rem
      }

      .comment-respond p.comment-notes,
      .comment-respond p.logged-in-as {
        margin: -4rem 0 6rem
      }

      .comments .comment-respond .comment-reply-title {
        font-size: 4.8rem
      }

      .comments .comment-respond p.comment-notes,
      .comments .comment-respond p.logged-in-as {
        margin: -4.5rem 0 4rem
      }

      .widget-content {
        font-size: 2.1rem
      }

      .footer-menu {
        font-size: 2.4rem;
        margin: -1.5rem 0 0 -3rem
      }

      .footer-menu li {
        margin: 1.5rem 0 0 3rem
      }

      ul.footer-social {
        margin: -1rem 0 0 -1rem
      }

      ul.footer-social li {
        margin: 1rem 0 0 1rem
      }

      .footer-social a {
        height: 4.4rem;
        width: 4.4rem
      }

      .footer-social a:before {
        font-size: 2rem
      }

      .footer-widgets-wrapper {
        margin-left: -6rem;
        width: calc(100% + 6rem)
      }

      .footer-widgets {
        margin-left: 6rem
      }
    }

    @media (min-width:1240px) {
      body.template-full-width .entry-content>.alignleft {
        margin-left: calc((100vw - 120rem)/2)
      }

      body.template-full-width .entry-content>.alignright {
        margin-right: calc((100vw - 120rem)/2)
      }
    }

    @media (min-width:1280px) {
      figure.wp-block-gallery.alignleft {
        margin-left: -31rem
      }

      figure.wp-block-gallery.alignright {
        margin-right: -31rem
      }

      .wp-block-separator.is-style-wide {
        max-width: 120rem;
        width: 120rem
      }

      .entry-content>.alignleft,
      .entry-content>p .alignleft,
      .entry-content>.wp-block-image .alignleft {
        right: calc((100vw - 58rem)/2 + 58rem + 4rem);
        margin-left: -31rem
      }

      .entry-content>.alignright,
      .entry-content>p .alignright,
      .entry-content>.wp-block-image .alignright {
        left: calc((100vw - 58rem)/2 + 58rem + 4rem);
        margin-right: -31rem
      }

      .entry-content>.alignwide {
        max-width: 120rem;
        width: 120rem
      }

      [class*=__inner-container]>.alignwide {
        max-width: 120rem;
        width: 100%
      }

      .alignleft,
      .alignright,
      .entry-content>.alignleft,
      .entry-content>p .alignleft,
      .entry-content>.wp-block-image .alignleft,
      .entry-content>.alignright,
      .entry-content>p .alignright,
      .entry-content>.wp-block-image .alignright,
      [class*=wp-block].alignwide:not(.has-background) [class*=__inner-container]>.alignleft,
      [class*=wp-block].alignwide:not(.has-background) [class*=__inner-container]>p .alignleft,
      [class*=wp-block].alignwide:not(.has-background) [class*=__inner-container]>.wp-block-image .alignleft,
      [class*=wp-block].alignfull [class*=__inner-container]>.alignleft,
      [class*=wp-block].alignfull [class*=__inner-container]>p .alignleft,
      [class*=wp-block].alignfull [class*=__inner-container]>.wp-block-image .alignleft,
      [class*=wp-block].alignwide:not(.has-background) [class*=__inner-container]>.alignright,
      [class*=wp-block].alignwide:not(.has-background) [class*=__inner-container]>p .alignright,
      [class*=wp-block].alignwide:not(.has-background) [class*=__inner-container]>.wp-block-image .alignright,
      [class*=wp-block].alignfull [class*=__inner-container]>.alignright,
      [class*=wp-block].alignfull [class*=__inner-container]>p .alignright,
      [class*=wp-block].alignfull [class*=__inner-container]>.wp-block-image .alignright {
        max-width: 25rem
      }

      body.template-full-width .alignfull:not(.has-background)>.wp-block-group__inner-container>p:not(.has-background-color) {
        padding-left: 0;
        padding-right: 0
      }

      body.template-full-width [class*=wp-block].alignfull [class*=__inner-container]>.wp-block-image .alignleft {
        margin-left: 0
      }

      body.template-full-width [class*=wp-block].alignfull [class*=__inner-container]>.wp-block-image .alignright {
        margin-right: 0
      }
    }

    @media (min-width:1330px) {

      .alignleft,
      .alignright,
      .entry-content>.alignleft,
      .entry-content>p .alignleft,
      .entry-content>.wp-block-image .alignleft,
      .entry-content>.alignright,
      .entry-content>p .alignright,
      .entry-content>.wp-block-image .alignright,
      [class*=wp-block].alignwide:not(.has-background) [class*=__inner-container]>.alignleft,
      [class*=wp-block].alignwide:not(.has-background) [class*=__inner-container]>p .alignleft,
      [class*=wp-block].alignwide:not(.has-background) [class*=__inner-container]>.wp-block-image .alignleft,
      [class*=wp-block].alignfull [class*=__inner-container]>.alignleft,
      [class*=wp-block].alignfull [class*=__inner-container]>p .alignleft,
      [class*=wp-block].alignfull [class*=__inner-container]>.wp-block-image .alignleft,
      [class*=wp-block].alignwide:not(.has-background) [class*=__inner-container]>.alignright,
      [class*=wp-block].alignwide:not(.has-background) [class*=__inner-container]>p .alignright,
      [class*=wp-block].alignwide:not(.has-background) [class*=__inner-container]>.wp-block-image .alignright,
      [class*=wp-block].alignfull [class*=__inner-container]>.alignright,
      [class*=wp-block].alignfull [class*=__inner-container]>p .alignright,
      [class*=wp-block].alignfull [class*=__inner-container]>.wp-block-image .alignright {
        max-width: 29rem
      }

      .wp-block-pullquote.is-style-solid-color.alignleft:before,
      .wp-block-pullquote.is-style-solid-color.alignright:before {
        top: 0
      }
    }

    .color-accent,
    .color-accent-hover:hover,
    .color-accent-hover:focus,
    :root .has-accent-color,
    .has-drop-cap:not(:focus):first-letter,
    .wp-block-button.is-style-outline,
    a {
      color: #053300
    }

    blockquote,
    .border-color-accent,
    .border-color-accent-hover:hover,
    .border-color-accent-hover:focus {
      border-color: #053300
    }

    button,
    .button,
    .faux-button,
    .wp-block-button__link,
    .wp-block-file .wp-block-file__button,
    input[type=button],
    input[type=reset],
    input[type=submit],
    .bg-accent,
    .bg-accent-hover:hover,
    .bg-accent-hover:focus,
    :root .has-accent-background-color,
    .comment-reply-link {
      background-color: #053300
    }

    .fill-children-accent,
    .fill-children-accent * {
      fill: #053300
    }

    :root .has-background-color,
    button,
    .button,
    .faux-button,
    .wp-block-button__link,
    .wp-block-file__button,
    input[type=button],
    input[type=reset],
    input[type=submit],
    .wp-block-button,
    .comment-reply-link,
    .has-background.has-primary-background-color:not(.has-text-color),
    .has-background.has-primary-background-color *:not(.has-text-color),
    .has-background.has-accent-background-color:not(.has-text-color),
    .has-background.has-accent-background-color *:not(.has-text-color) {
      color: #29a825
    }

    :root .has-background-background-color {
      background-color: #29a825
    }

    body,
    .entry-title a,
    :root .has-primary-color {
      color: #000
    }

    :root .has-primary-background-color {
      background-color: #000
    }

    cite,
    figcaption,
    .wp-caption-text,
    .post-meta,
    .entry-content .wp-block-archives li,
    .entry-content .wp-block-categories li,
    .entry-content .wp-block-latest-posts li,
    .wp-block-latest-comments__comment-date,
    .wp-block-latest-posts__post-date,
    .wp-block-embed figcaption,
    .wp-block-image figcaption,
    .wp-block-pullquote cite,
    .comment-metadata,
    .comment-respond .comment-notes,
    .comment-respond .logged-in-as,
    .pagination .dots,
    .entry-content hr:not(.has-background),
    hr.styled-separator,
    :root .has-secondary-color {
      color: #101e0f
    }

    :root .has-secondary-background-color {
      background-color: #101e0f
    }

    pre,
    fieldset,
    input,
    textarea,
    table,
    table *,
    hr {
      border-color: #208b1c
    }

    caption,
    code,
    code,
    kbd,
    samp,
    .wp-block-table.is-style-stripes tbody tr:nth-child(odd),
    :root .has-subtle-background-background-color {
      background-color: #208b1c
    }

    .wp-block-table.is-style-stripes {
      border-bottom-color: #208b1c
    }

    .wp-block-latest-posts.is-grid li {
      border-top-color: #208b1c
    }

    :root .has-subtle-background-color {
      color: #208b1c
    }

    body:not(.overlay-header) .primary-menu>li>a,
    body:not(.overlay-header) .primary-menu>li>.icon,
    .modal-menu a,
    .footer-menu a,
    .footer-widgets a,
    #site-footer .wp-block-button.is-style-outline,
    .wp-block-pullquote:before,
    .singular:not(.overlay-header) .entry-header a,
    .archive-header a,
    .header-footer-group .color-accent,
    .header-footer-group .color-accent-hover:hover {
      color: #2b881a
    }

    .social-icons a,
    #site-footer button:not(.toggle),
    #site-footer .button,
    #site-footer .faux-button,
    #site-footer .wp-block-button__link,
    #site-footer .wp-block-file__button,
    #site-footer input[type=button],
    #site-footer input[type=reset],
    #site-footer input[type=submit] {
      background-color: #2b881a
    }

    .social-icons a,
    body:not(.overlay-header) .primary-menu ul,
    .header-footer-group button,
    .header-footer-group .button,
    .header-footer-group .faux-button,
    .header-footer-group .wp-block-button:not(.is-style-outline) .wp-block-button__link,
    .header-footer-group .wp-block-file__button,
    .header-footer-group input[type=button],
    .header-footer-group input[type=reset],
    .header-footer-group input[type=submit] {
      color: #fff
    }

    #site-header,
    .footer-nav-widgets-wrapper,
    #site-footer,
    .menu-modal,
    .menu-modal-inner,
    .search-modal-inner,
    .archive-header,
    .singular .entry-header,
    .singular .featured-media:before,
    .wp-block-pullquote:before {
      background-color: #fff
    }

    .header-footer-group,
    body:not(.overlay-header) #site-header .toggle,
    .menu-modal .toggle {
      color: #000
    }

    body:not(.overlay-header) .primary-menu ul {
      background-color: #000
    }

    body:not(.overlay-header) .primary-menu>li>ul:after {
      border-bottom-color: #000
    }

    body:not(.overlay-header) .primary-menu ul ul:after {
      border-left-color: #000
    }

    .site-description,
    body:not(.overlay-header) .toggle-inner .toggle-text,
    .widget .post-date,
    .widget .rss-date,
    .widget_archive li,
    .widget_categories li,
    .widget cite,
    .widget_pages li,
    .widget_meta li,
    .widget_nav_menu li,
    .powered-by-wordpress,
    .to-the-top,
    .singular .entry-header .post-meta,
    .singular:not(.overlay-header) .entry-header .post-meta a {
      color: #6d6d6d
    }

    .header-footer-group pre,
    .header-footer-group fieldset,
    .header-footer-group input,
    .header-footer-group textarea,
    .header-footer-group table,
    .header-footer-group table *,
    .footer-nav-widgets-wrapper,
    #site-footer,
    .menu-modal nav *,
    .footer-widgets-outer-wrapper,
    .footer-top {
      border-color: #dbdbdb
    }

    .header-footer-group table caption,
    body:not(.overlay-header) .header-inner .toggle-wrapper:before {
      background-color: #dbdbdb
    }

    /*! elementor-icons - v5.9.1 - 20-07-2020 */
    @font-face {
      font-family: eicons;
      src: url(//congreso.relep.org/wp-content/plugins/elementor/assets/lib/eicons/css/../fonts/eicons.eot?5.9.1);
      src: url(//congreso.relep.org/wp-content/plugins/elementor/assets/lib/eicons/css/../fonts/eicons.eot?5.9.1#iefix) format("embedded-opentype"), url(//congreso.relep.org/wp-content/plugins/elementor/assets/lib/eicons/css/../fonts/eicons.woff2?5.9.1) format("woff2"), url(//congreso.relep.org/wp-content/plugins/elementor/assets/lib/eicons/css/../fonts/eicons.woff?5.9.1) format("woff"), url(//congreso.relep.org/wp-content/plugins/elementor/assets/lib/eicons/css/../fonts/eicons.ttf?5.9.1) format("truetype"), url(//congreso.relep.org/wp-content/plugins/elementor/assets/lib/eicons/css/../fonts/eicons.svg?5.9.1#eicon) format("svg");
      font-weight: 400;
      font-style: normal
    }

    [class*=" eicon-"],
    [class^=eicon] {
      display: inline-block;
      font-family: eicons;
      font-size: inherit;
      font-weight: 400;
      font-style: normal;
      font-variant: normal;
      line-height: 1;
      text-rendering: auto;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale
    }

    @keyframes a {
      0% {
        transform: rotate(0deg)
      }

      to {
        transform: rotate(359deg)
      }
    }

    .eicon-animation-spin {
      animation: a 2s infinite linear
    }

    .eicon-editor-link:before {
      content: '\e800'
    }

    .eicon-editor-unlink:before {
      content: '\e801'
    }

    .eicon-editor-external-link:before {
      content: '\e802'
    }

    .eicon-editor-close:before {
      content: '\e803'
    }

    .eicon-editor-list-ol:before {
      content: '\e804'
    }

    .eicon-editor-list-ul:before {
      content: '\e805'
    }

    .eicon-editor-bold:before {
      content: '\e806'
    }

    .eicon-editor-italic:before {
      content: '\e807'
    }

    .eicon-editor-underline:before {
      content: '\e808'
    }

    .eicon-editor-paragraph:before {
      content: '\e809'
    }

    .eicon-editor-h1:before {
      content: '\e80a'
    }

    .eicon-editor-h2:before {
      content: '\e80b'
    }

    .eicon-editor-h3:before {
      content: '\e80c'
    }

    .eicon-editor-h4:before {
      content: '\e80d'
    }

    .eicon-editor-h5:before {
      content: '\e80e'
    }

    .eicon-editor-h6:before {
      content: '\e80f'
    }

    .eicon-editor-quote:before {
      content: '\e810'
    }

    .eicon-editor-code:before {
      content: '\e811'
    }

    .eicon-elementor:before {
      content: '\e812'
    }

    .eicon-elementor-circle:before {
      content: '\e813'
    }

    .eicon-pojome:before {
      content: '\e814'
    }

    .eicon-plus:before {
      content: '\e815'
    }

    .eicon-menu-bar:before {
      content: '\e816'
    }

    .eicon-apps:before {
      content: '\e817'
    }

    .eicon-accordion:before {
      content: '\e818'
    }

    .eicon-alert:before {
      content: '\e819'
    }

    .eicon-animation-text:before {
      content: '\e81a'
    }

    .eicon-animation:before {
      content: '\e81b'
    }

    .eicon-banner:before {
      content: '\e81c'
    }

    .eicon-blockquote:before {
      content: '\e81d'
    }

    .eicon-button:before {
      content: '\e81e'
    }

    .eicon-call-to-action:before {
      content: '\e81f'
    }

    .eicon-captcha:before {
      content: '\e820'
    }

    .eicon-carousel:before {
      content: '\e821'
    }

    .eicon-checkbox:before {
      content: '\e822'
    }

    .eicon-columns:before {
      content: '\e823'
    }

    .eicon-countdown:before {
      content: '\e824'
    }

    .eicon-counter:before {
      content: '\e825'
    }

    .eicon-date:before {
      content: '\e826'
    }

    .eicon-divider-shape:before {
      content: '\e827'
    }

    .eicon-divider:before {
      content: '\e828'
    }

    .eicon-download-button:before {
      content: '\e829'
    }

    .eicon-dual-button:before {
      content: '\e82a'
    }

    .eicon-email-field:before {
      content: '\e82b'
    }

    .eicon-facebook-comments:before {
      content: '\e82c'
    }

    .eicon-facebook-like-box:before {
      content: '\e82d'
    }

    .eicon-form-horizontal:before {
      content: '\e82e'
    }

    .eicon-form-vertical:before {
      content: '\e82f'
    }

    .eicon-gallery-grid:before {
      content: '\e830'
    }

    .eicon-gallery-group:before {
      content: '\e831'
    }

    .eicon-gallery-justified:before {
      content: '\e832'
    }

    .eicon-gallery-masonry:before {
      content: '\e833'
    }

    .eicon-icon-box:before {
      content: '\e834'
    }

    .eicon-image-before-after:before {
      content: '\e835'
    }

    .eicon-image-box:before {
      content: '\e836'
    }

    .eicon-image-hotspot:before {
      content: '\e837'
    }

    .eicon-image-rollover:before {
      content: '\e838'
    }

    .eicon-info-box:before {
      content: '\e839'
    }

    .eicon-inner-section:before {
      content: '\e83a'
    }

    .eicon-mailchimp:before {
      content: '\e83b'
    }

    .eicon-menu-card:before {
      content: '\e83c'
    }

    .eicon-navigation-horizontal:before {
      content: '\e83d'
    }

    .eicon-nav-menu:before {
      content: '\e83e'
    }

    .eicon-navigation-vertical:before {
      content: '\e83f'
    }

    .eicon-number-field:before {
      content: '\e840'
    }

    .eicon-parallax:before {
      content: '\e841'
    }

    .eicon-php7:before {
      content: '\e842'
    }

    .eicon-post-list:before {
      content: '\e843'
    }

    .eicon-post-slider:before {
      content: '\e844'
    }

    .eicon-post:before {
      content: '\e845'
    }

    .eicon-posts-carousel:before {
      content: '\e846'
    }

    .eicon-posts-grid:before {
      content: '\e847'
    }

    .eicon-posts-group:before {
      content: '\e848'
    }

    .eicon-posts-justified:before {
      content: '\e849'
    }

    .eicon-posts-masonry:before {
      content: '\e84a'
    }

    .eicon-posts-ticker:before {
      content: '\e84b'
    }

    .eicon-price-list:before {
      content: '\e84c'
    }

    .eicon-price-table:before {
      content: '\e84d'
    }

    .eicon-radio:before {
      content: '\e84e'
    }

    .eicon-rtl:before {
      content: '\e84f'
    }

    .eicon-scroll:before {
      content: '\e850'
    }

    .eicon-search:before {
      content: '\e851'
    }

    .eicon-select:before {
      content: '\e852'
    }

    .eicon-share:before {
      content: '\e853'
    }

    .eicon-sidebar:before {
      content: '\e854'
    }

    .eicon-skill-bar:before {
      content: '\e855'
    }

    .eicon-slider-3d:before {
      content: '\e856'
    }

    .eicon-slider-album:before {
      content: '\e857'
    }

    .eicon-slider-device:before {
      content: '\e858'
    }

    .eicon-slider-full-screen:before {
      content: '\e859'
    }

    .eicon-slider-push:before {
      content: '\e85a'
    }

    .eicon-slider-vertical:before {
      content: '\e85b'
    }

    .eicon-slider-video:before {
      content: '\e85c'
    }

    .eicon-slides:before {
      content: '\e85d'
    }

    .eicon-social-icons:before {
      content: '\e85e'
    }

    .eicon-spacer:before {
      content: '\e85f'
    }

    .eicon-table:before {
      content: '\e860'
    }

    .eicon-tabs:before {
      content: '\e861'
    }

    .eicon-tel-field:before {
      content: '\e862'
    }

    .eicon-text-area:before {
      content: '\e863'
    }

    .eicon-text-field:before {
      content: '\e864'
    }

    .eicon-thumbnails-down:before {
      content: '\e865'
    }

    .eicon-thumbnails-half:before {
      content: '\e866'
    }

    .eicon-thumbnails-right:before {
      content: '\e867'
    }

    .eicon-time-line:before {
      content: '\e868'
    }

    .eicon-toggle:before {
      content: '\e869'
    }

    .eicon-url:before {
      content: '\e86a'
    }

    .eicon-t-letter:before {
      content: '\e86b'
    }

    .eicon-wordpress:before {
      content: '\e86c'
    }

    .eicon-text:before {
      content: '\e86d'
    }

    .eicon-anchor:before {
      content: '\e86e'
    }

    .eicon-bullet-list:before {
      content: '\e86f'
    }

    .eicon-code:before {
      content: '\e870'
    }

    .eicon-favorite:before {
      content: '\e871'
    }

    .eicon-google-maps:before {
      content: '\e872'
    }

    .eicon-image:before {
      content: '\e873'
    }

    .eicon-photo-library:before {
      content: '\e874'
    }

    .eicon-woocommerce:before {
      content: '\e875'
    }

    .eicon-youtube:before {
      content: '\e876'
    }

    .eicon-flip-box:before {
      content: '\e877'
    }

    .eicon-settings:before {
      content: '\e878'
    }

    .eicon-headphones:before {
      content: '\e879'
    }

    .eicon-testimonial:before {
      content: '\e87a'
    }

    .eicon-counter-circle:before {
      content: '\e87b'
    }

    .eicon-person:before {
      content: '\e87c'
    }

    .eicon-chevron-right:before {
      content: '\e87d'
    }

    .eicon-chevron-left:before {
      content: '\e87e'
    }

    .eicon-close:before {
      content: '\e87f'
    }

    .eicon-file-download:before {
      content: '\e880'
    }

    .eicon-save:before {
      content: '\e881'
    }

    .eicon-zoom-in:before {
      content: '\e882'
    }

    .eicon-shortcode:before {
      content: '\e883'
    }

    .eicon-nerd:before {
      content: '\e884'
    }

    .eicon-device-desktop:before {
      content: '\e885'
    }

    .eicon-device-tablet:before {
      content: '\e886'
    }

    .eicon-device-mobile:before {
      content: '\e887'
    }

    .eicon-document-file:before {
      content: '\e888'
    }

    .eicon-folder-o:before {
      content: '\e889'
    }

    .eicon-hypster:before {
      content: '\e88a'
    }

    .eicon-h-align-left:before {
      content: '\e88b'
    }

    .eicon-h-align-right:before {
      content: '\e88c'
    }

    .eicon-h-align-center:before {
      content: '\e88d'
    }

    .eicon-h-align-stretch:before {
      content: '\e88e'
    }

    .eicon-v-align-top:before {
      content: '\e88f'
    }

    .eicon-v-align-bottom:before {
      content: '\e890'
    }

    .eicon-v-align-middle:before {
      content: '\e891'
    }

    .eicon-v-align-stretch:before {
      content: '\e892'
    }

    .eicon-pro-icon:before {
      content: '\e893'
    }

    .eicon-mail:before {
      content: '\e894'
    }

    .eicon-lock-user:before {
      content: '\e895'
    }

    .eicon-testimonial-carousel:before {
      content: '\e896'
    }

    .eicon-media-carousel:before {
      content: '\e897'
    }

    .eicon-section:before {
      content: '\e898'
    }

    .eicon-column:before {
      content: '\e899'
    }

    .eicon-edit:before {
      content: '\e89a'
    }

    .eicon-clone:before {
      content: '\e89b'
    }

    .eicon-trash:before {
      content: '\e89c'
    }

    .eicon-play:before {
      content: '\e89d'
    }

    .eicon-angle-right:before {
      content: '\e89e'
    }

    .eicon-angle-left:before {
      content: '\e89f'
    }

    .eicon-animated-headline:before {
      content: '\e8a0'
    }

    .eicon-menu-toggle:before {
      content: '\e8a1'
    }

    .eicon-fb-embed:before {
      content: '\e8a2'
    }

    .eicon-fb-feed:before {
      content: '\e8a3'
    }

    .eicon-twitter-embed:before {
      content: '\e8a4'
    }

    .eicon-twitter-feed:before {
      content: '\e8a5'
    }

    .eicon-sync:before {
      content: '\e8a6'
    }

    .eicon-import-export:before {
      content: '\e8a7'
    }

    .eicon-check-circle:before {
      content: '\e8a8'
    }

    .eicon-library-save:before {
      content: '\e8a9'
    }

    .eicon-library-download:before {
      content: '\e8aa'
    }

    .eicon-insert:before {
      content: '\e8ab'
    }

    .eicon-preview-medium:before {
      content: '\e8ac'
    }

    .eicon-sort-down:before {
      content: '\e8ad'
    }

    .eicon-sort-up:before {
      content: '\e8ae'
    }

    .eicon-heading:before {
      content: '\e8af'
    }

    .eicon-logo:before {
      content: '\e8b0'
    }

    .eicon-meta-data:before {
      content: '\e8b1'
    }

    .eicon-post-content:before {
      content: '\e8b2'
    }

    .eicon-post-excerpt:before {
      content: '\e8b3'
    }

    .eicon-post-navigation:before {
      content: '\e8b4'
    }

    .eicon-yoast:before {
      content: '\e8b5'
    }

    .eicon-nerd-chuckle:before {
      content: '\e8b6'
    }

    .eicon-nerd-wink:before {
      content: '\e8b7'
    }

    .eicon-comments:before {
      content: '\e8b8'
    }

    .eicon-download-circle-o:before {
      content: '\e8b9'
    }

    .eicon-library-upload:before {
      content: '\e8ba'
    }

    .eicon-save-o:before {
      content: '\e8bb'
    }

    .eicon-upload-circle-o:before {
      content: '\e8bc'
    }

    .eicon-ellipsis-h:before {
      content: '\e8bd'
    }

    .eicon-ellipsis-v:before {
      content: '\e8be'
    }

    .eicon-arrow-left:before {
      content: '\e8bf'
    }

    .eicon-arrow-right:before {
      content: '\e8c0'
    }

    .eicon-arrow-up:before {
      content: '\e8c1'
    }

    .eicon-arrow-down:before {
      content: '\e8c2'
    }

    .eicon-play-o:before {
      content: '\e8c3'
    }

    .eicon-archive-posts:before {
      content: '\e8c4'
    }

    .eicon-archive-title:before {
      content: '\e8c5'
    }

    .eicon-featured-image:before {
      content: '\e8c6'
    }

    .eicon-post-info:before {
      content: '\e8c7'
    }

    .eicon-post-title:before {
      content: '\e8c8'
    }

    .eicon-site-logo:before {
      content: '\e8c9'
    }

    .eicon-site-search:before {
      content: '\e8ca'
    }

    .eicon-site-title:before {
      content: '\e8cb'
    }

    .eicon-plus-square:before {
      content: '\e8cc'
    }

    .eicon-minus-square:before {
      content: '\e8cd'
    }

    .eicon-cloud-check:before {
      content: '\e8ce'
    }

    .eicon-drag-n-drop:before {
      content: '\e8cf'
    }

    .eicon-welcome:before {
      content: '\e8d0'
    }

    .eicon-handle:before {
      content: '\e8d1'
    }

    .eicon-cart:before {
      content: '\e8d2'
    }

    .eicon-product-add-to-cart:before {
      content: '\e8d3'
    }

    .eicon-product-breadcrumbs:before {
      content: '\e8d4'
    }

    .eicon-product-categories:before {
      content: '\e8d5'
    }

    .eicon-product-description:before {
      content: '\e8d6'
    }

    .eicon-product-images:before {
      content: '\e8d7'
    }

    .eicon-product-info:before {
      content: '\e8d8'
    }

    .eicon-product-meta:before {
      content: '\e8d9'
    }

    .eicon-product-pages:before {
      content: '\e8da'
    }

    .eicon-product-price:before {
      content: '\e8db'
    }

    .eicon-product-rating:before {
      content: '\e8dc'
    }

    .eicon-product-related:before {
      content: '\e8dd'
    }

    .eicon-product-stock:before {
      content: '\e8de'
    }

    .eicon-product-tabs:before {
      content: '\e8df'
    }

    .eicon-product-title:before {
      content: '\e8e0'
    }

    .eicon-product-upsell:before {
      content: '\e8e1'
    }

    .eicon-products:before {
      content: '\e8e2'
    }

    .eicon-bag-light:before {
      content: '\e8e3'
    }

    .eicon-bag-medium:before {
      content: '\e8e4'
    }

    .eicon-bag-solid:before {
      content: '\e8e5'
    }

    .eicon-basket-light:before {
      content: '\e8e6'
    }

    .eicon-basket-medium:before {
      content: '\e8e7'
    }

    .eicon-basket-solid:before {
      content: '\e8e8'
    }

    .eicon-cart-light:before {
      content: '\e8e9'
    }

    .eicon-cart-medium:before {
      content: '\e8ea'
    }

    .eicon-cart-solid:before {
      content: '\e8eb'
    }

    .eicon-exchange:before {
      content: '\e8ec'
    }

    .eicon-preview-thin:before {
      content: '\e8ed'
    }

    .eicon-device-laptop:before {
      content: '\e8ee'
    }

    .eicon-collapse:before {
      content: '\e8ef'
    }

    .eicon-expand:before {
      content: '\e8f0'
    }

    .eicon-navigator:before {
      content: '\e8f1'
    }

    .eicon-plug:before {
      content: '\e8f2'
    }

    .eicon-dashboard:before {
      content: '\e8f3'
    }

    .eicon-typography:before {
      content: '\e8f4'
    }

    .eicon-info-circle-o:before {
      content: '\e8f5'
    }

    .eicon-integration:before {
      content: '\e8f6'
    }

    .eicon-plus-circle-o:before {
      content: '\e8f7'
    }

    .eicon-rating:before {
      content: '\e8f8'
    }

    .eicon-review:before {
      content: '\e8f9'
    }

    .eicon-tools:before {
      content: '\e8fa'
    }

    .eicon-loading:before {
      content: '\e8fb'
    }

    .eicon-sitemap:before {
      content: '\e8fc'
    }

    .eicon-click:before {
      content: '\e8fd'
    }

    .eicon-clock:before {
      content: '\e8fe'
    }

    .eicon-library-open:before {
      content: '\e8ff'
    }

    .eicon-warning:before {
      content: '\e900'
    }

    .eicon-flow:before {
      content: '\e901'
    }

    .eicon-cursor-move:before {
      content: '\e902'
    }

    .eicon-arrow-circle-left:before {
      content: '\e903'
    }

    .eicon-flash:before {
      content: '\e904'
    }

    .eicon-redo:before {
      content: '\e905'
    }

    .eicon-ban:before {
      content: '\e906'
    }

    .eicon-barcode:before {
      content: '\e907'
    }

    .eicon-calendar:before {
      content: '\e908'
    }

    .eicon-caret-left:before {
      content: '\e909'
    }

    .eicon-caret-right:before {
      content: '\e90a'
    }

    .eicon-caret-up:before {
      content: '\e90b'
    }

    .eicon-chain-broken:before {
      content: '\e90c'
    }

    .eicon-check-circle-o:before {
      content: '\e90d'
    }

    .eicon-check:before {
      content: '\e90e'
    }

    .eicon-chevron-double-left:before {
      content: '\e90f'
    }

    .eicon-chevron-double-right:before {
      content: '\e910'
    }

    .eicon-undo:before {
      content: '\e911'
    }

    .eicon-filter:before {
      content: '\e912'
    }

    .eicon-circle-o:before {
      content: '\e913'
    }

    .eicon-circle:before {
      content: '\e914'
    }

    .eicon-clock-o:before {
      content: '\e915'
    }

    .eicon-cog:before {
      content: '\e916'
    }

    .eicon-cogs:before {
      content: '\e917'
    }

    .eicon-commenting-o:before {
      content: '\e918'
    }

    .eicon-copy:before {
      content: '\e919'
    }

    .eicon-database:before {
      content: '\e91a'
    }

    .eicon-dot-circle-o:before {
      content: '\e91b'
    }

    .eicon-envelope:before {
      content: '\e91c'
    }

    .eicon-external-link-square:before {
      content: '\e91d'
    }

    .eicon-eyedropper:before {
      content: '\e91e'
    }

    .eicon-folder:before {
      content: '\e91f'
    }

    .eicon-font:before {
      content: '\e920'
    }

    .eicon-adjust:before {
      content: '\e921'
    }

    .eicon-lightbox:before {
      content: '\e922'
    }

    .eicon-heart-o:before {
      content: '\e923'
    }

    .eicon-history:before {
      content: '\e924'
    }

    .eicon-image-bold:before {
      content: '\e925'
    }

    .eicon-info-circle:before {
      content: '\e926'
    }

    .eicon-link:before {
      content: '\e927'
    }

    .eicon-long-arrow-left:before {
      content: '\e928'
    }

    .eicon-long-arrow-right:before {
      content: '\e929'
    }

    .eicon-caret-down:before {
      content: '\e92a'
    }

    .eicon-paint-brush:before {
      content: '\e92b'
    }

    .eicon-pencil:before {
      content: '\e92c'
    }

    .eicon-plus-circle:before {
      content: '\e92d'
    }

    .eicon-zoom-in-bold:before {
      content: '\e92e'
    }

    .eicon-sort-amount-desc:before {
      content: '\e92f'
    }

    .eicon-sign-out:before {
      content: '\e930'
    }

    .eicon-spinner:before {
      content: '\e931'
    }

    .eicon-square:before {
      content: '\e932'
    }

    .eicon-star-o:before {
      content: '\e933'
    }

    .eicon-star:before {
      content: '\e934'
    }

    .eicon-text-align-justify:before {
      content: '\e935'
    }

    .eicon-text-align-center:before {
      content: '\e936'
    }

    .eicon-tags:before {
      content: '\e937'
    }

    .eicon-text-align-left:before {
      content: '\e938'
    }

    .eicon-text-align-right:before {
      content: '\e939'
    }

    .eicon-close-circle:before {
      content: '\e93a'
    }

    .eicon-trash-o:before {
      content: '\e93b'
    }

    .eicon-font-awesome:before {
      content: '\e93c'
    }

    .eicon-user-circle-o:before {
      content: '\e93d'
    }

    .eicon-video-camera:before {
      content: '\e93e'
    }

    .eicon-heart:before {
      content: '\e93f'
    }

    .eicon-wrench:before {
      content: '\e940'
    }

    .eicon-help:before {
      content: '\e941'
    }

    .eicon-help-o:before {
      content: '\e942'
    }

    .eicon-zoom-out-bold:before {
      content: '\e943'
    }

    .eicon-plus-square-o:before {
      content: '\e944'
    }

    .eicon-minus-square-o:before {
      content: '\e945'
    }

    .eicon-minus-circle:before {
      content: '\e946'
    }

    .eicon-minus-circle-o:before {
      content: '\e947'
    }

    .eicon-code-bold:before {
      content: '\e948'
    }

    .eicon-cloud-upload:before {
      content: '\e949'
    }

    .eicon-search-bold:before {
      content: '\e94a'
    }

    .eicon-map-pin:before {
      content: '\e94b'
    }

    .eicon-meetup:before {
      content: '\e94c'
    }

    .eicon-slideshow:before {
      content: '\e94d'
    }

    .eicon-t-letter-bold:before {
      content: '\e94e'
    }

    .eicon-preferences:before {
      content: '\e94f'
    }

    .eicon-table-of-contents:before {
      content: '\e950'
    }

    .eicon-tv:before {
      content: '\e951'
    }

    .eicon-upload:before {
      content: '\e952'
    }

    .eicon-instagram-comments:before {
      content: '\e953'
    }

    .eicon-instagram-nested-gallery:before {
      content: '\e954'
    }

    .eicon-instagram-post:before {
      content: '\e955'
    }

    .eicon-instagram-video:before {
      content: '\e956'
    }

    .eicon-instagram-gallery:before {
      content: '\e957'
    }

    .eicon-instagram-likes:before {
      content: '\e958'
    }

    .eicon-facebook:before {
      content: '\e959'
    }

    .eicon-twitter:before {
      content: '\e95a'
    }

    .eicon-pinterest:before {
      content: '\e95b'
    }

    .eicon-frame-expand:before {
      content: '\e95c'
    }

    .eicon-frame-minimize:before {
      content: '\e95d'
    }

    .eicon-archive:before {
      content: '\e95e'
    }

    .eicon-colors-typography:before {
      content: '\e95f'
    }

    .eicon-custom:before {
      content: '\e960'
    }

    .eicon-footer:before {
      content: '\e961'
    }

    .eicon-header:before {
      content: '\e962'
    }

    .eicon-layout-settings:before {
      content: '\e963'
    }

    .eicon-lightbox-expand:before {
      content: '\e964'
    }

    .eicon-error-404:before {
      content: '\e965'
    }

    .eicon-theme-style:before {
      content: '\e966'
    }

    .eicon-search-results:before {
      content: '\e967'
    }

    .eicon-single-post:before {
      content: '\e968'
    }

    .eicon-site-identity:before {
      content: '\e969'
    }

    .eicon-theme-builder:before {
      content: '\e96a'
    }

    .eicon-download-bold:before {
      content: '\e96b'
    }

    .eicon-share-arrow:before {
      content: '\e96c'
    }

    .eicon-global-settings:before {
      content: '\e96d'
    }

    .eicon-user-preferences:before {
      content: '\e96e'
    }

    .eicon-lock:before {
      content: '\e96f'
    }

    .eicon-export-kit:before {
      content: '\e970'
    }

    .eicon-import-kit:before {
      content: '\e971'
    }

    .eicon-lottie:before {
      content: '\e972'
    }

    .eicon-products-archive:before {
      content: '\e973'
    }

    .eicon-single-product:before {
      content: '\e974'
    }

    .eicon-disable-trash-o:before {
      content: '\e975'
    }

    .eicon-single-page:before {
      content: '\e976'
    }

    .eicon-wordpress-light:before {
      content: '\e977'
    }

    .eicon-cogs-check:before {
      content: '\e978'
    }

    .eicon-custom-css:before {
      content: '\e979'
    }

    .eicon-global-colors:before {
      content: '\e97a'
    }

    .eicon-globe:before {
      content: '\e97b'
    }

    .eicon-typography-1:before {
      content: '\e97c'
    }

    .eicon-background:before {
      content: '\e97d'
    }

    .eicon-eye:before {
      content: '\e8ac'
    }

    .eicon-elementor-square:before {
      content: '\e813'
    }

    @keyframes bounce {

      20%,
      53%,
      80%,
      from,
      to {
        animation-timing-function: cubic-bezier(.215, .61, .355, 1);
        transform: translate3d(0, 0, 0)
      }

      40%,
      43% {
        animation-timing-function: cubic-bezier(.755, .050, .855, .060);
        transform: translate3d(0, -30px, 0)
      }

      70% {
        animation-timing-function: cubic-bezier(.755, .050, .855, .060);
        transform: translate3d(0, -15px, 0)
      }

      90% {
        transform: translate3d(0, -4px, 0)
      }
    }

    .bounce {
      animation-name: bounce;
      transform-origin: center bottom
    }

    @keyframes flash {

      50%,
      from,
      to {
        opacity: 1
      }

      25%,
      75% {
        opacity: 0
      }
    }

    .flash {
      animation-name: flash
    }

    @keyframes pulse {

      from,
      to {
        transform: scale3d(1, 1, 1)
      }

      50% {
        transform: scale3d(1.05, 1.05, 1.05)
      }
    }

    .pulse {
      animation-name: pulse
    }

    @keyframes rubberBand {

      from,
      to {
        transform: scale3d(1, 1, 1)
      }

      30% {
        transform: scale3d(1.25, .75, 1)
      }

      40% {
        transform: scale3d(.75, 1.25, 1)
      }

      50% {
        transform: scale3d(1.15, .85, 1)
      }

      65% {
        transform: scale3d(.95, 1.05, 1)
      }

      75% {
        transform: scale3d(1.05, .95, 1)
      }
    }

    .rubberBand {
      animation-name: rubberBand
    }

    @keyframes shake {

      from,
      to {
        transform: translate3d(0, 0, 0)
      }

      10%,
      30%,
      50%,
      70%,
      90% {
        transform: translate3d(-10px, 0, 0)
      }

      20%,
      40%,
      60%,
      80% {
        transform: translate3d(10px, 0, 0)
      }
    }

    .shake {
      animation-name: shake
    }

    @keyframes headShake {
      0% {
        transform: translateX(0)
      }

      6.5% {
        transform: translateX(-6px) rotateY(-9deg)
      }

      18.5% {
        transform: translateX(5px) rotateY(7deg)
      }

      31.5% {
        transform: translateX(-3px) rotateY(-5deg)
      }

      43.5% {
        transform: translateX(2px) rotateY(3deg)
      }

      50% {
        transform: translateX(0)
      }
    }

    .headShake {
      animation-timing-function: ease-in-out;
      animation-name: headShake
    }

    @keyframes swing {
      20% {
        transform: rotate3d(0, 0, 1, 15deg)
      }

      40% {
        transform: rotate3d(0, 0, 1, -10deg)
      }

      60% {
        transform: rotate3d(0, 0, 1, 5deg)
      }

      80% {
        transform: rotate3d(0, 0, 1, -5deg)
      }

      to {
        transform: rotate3d(0, 0, 1, 0deg)
      }
    }

    .swing {
      transform-origin: top center;
      animation-name: swing
    }

    @keyframes tada {

      from,
      to {
        transform: scale3d(1, 1, 1)
      }

      10%,
      20% {
        transform: scale3d(.9, .9, .9) rotate3d(0, 0, 1, -3deg)
      }

      30%,
      50%,
      70%,
      90% {
        transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg)
      }

      40%,
      60%,
      80% {
        transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg)
      }
    }

    .tada {
      animation-name: tada
    }

    @keyframes wobble {

      from,
      to {
        transform: none
      }

      15% {
        transform: translate3d(-25%, 0, 0) rotate3d(0, 0, 1, -5deg)
      }

      30% {
        transform: translate3d(20%, 0, 0) rotate3d(0, 0, 1, 3deg)
      }

      45% {
        transform: translate3d(-15%, 0, 0) rotate3d(0, 0, 1, -3deg)
      }

      60% {
        transform: translate3d(10%, 0, 0) rotate3d(0, 0, 1, 2deg)
      }

      75% {
        transform: translate3d(-5%, 0, 0) rotate3d(0, 0, 1, -1deg)
      }
    }

    .wobble {
      animation-name: wobble
    }

    @keyframes jello {

      11.1%,
      from,
      to {
        transform: none
      }

      22.2% {
        transform: skewX(-12.5deg) skewY(-12.5deg)
      }

      33.3% {
        transform: skewX(6.25deg) skewY(6.25deg)
      }

      44.4% {
        transform: skewX(-3.125deg) skewY(-3.125deg)
      }

      55.5% {
        transform: skewX(1.5625deg) skewY(1.5625deg)
      }

      66.6% {
        transform: skewX(-.78125deg) skewY(-.78125deg)
      }

      77.7% {
        transform: skewX(.390625deg) skewY(.390625deg)
      }

      88.8% {
        transform: skewX(-.1953125deg) skewY(-.1953125deg)
      }
    }

    .jello {
      animation-name: jello;
      transform-origin: center
    }

    @keyframes bounceIn {

      20%,
      40%,
      60%,
      80%,
      from,
      to {
        animation-timing-function: cubic-bezier(.215, .61, .355, 1)
      }

      0% {
        opacity: 0;
        transform: scale3d(.3, .3, .3)
      }

      20% {
        transform: scale3d(1.1, 1.1, 1.1)
      }

      40% {
        transform: scale3d(.9, .9, .9)
      }

      60% {
        opacity: 1;
        transform: scale3d(1.03, 1.03, 1.03)
      }

      80% {
        transform: scale3d(.97, .97, .97)
      }

      to {
        opacity: 1;
        transform: scale3d(1, 1, 1)
      }
    }

    .bounceIn {
      animation-name: bounceIn
    }

    @keyframes bounceInDown {

      60%,
      75%,
      90%,
      from,
      to {
        animation-timing-function: cubic-bezier(.215, .61, .355, 1)
      }

      0% {
        opacity: 0;
        transform: translate3d(0, -3000px, 0)
      }

      60% {
        opacity: 1;
        transform: translate3d(0, 25px, 0)
      }

      75% {
        transform: translate3d(0, -10px, 0)
      }

      90% {
        transform: translate3d(0, 5px, 0)
      }

      to {
        transform: none
      }
    }

    .bounceInDown {
      animation-name: bounceInDown
    }

    @keyframes bounceInLeft {

      60%,
      75%,
      90%,
      from,
      to {
        animation-timing-function: cubic-bezier(.215, .61, .355, 1)
      }

      0% {
        opacity: 0;
        transform: translate3d(-3000px, 0, 0)
      }

      60% {
        opacity: 1;
        transform: translate3d(25px, 0, 0)
      }

      75% {
        transform: translate3d(-10px, 0, 0)
      }

      90% {
        transform: translate3d(5px, 0, 0)
      }

      to {
        transform: none
      }
    }

    .bounceInLeft {
      animation-name: bounceInLeft
    }

    @keyframes bounceInRight {

      60%,
      75%,
      90%,
      from,
      to {
        animation-timing-function: cubic-bezier(.215, .61, .355, 1)
      }

      from {
        opacity: 0;
        transform: translate3d(3000px, 0, 0)
      }

      60% {
        opacity: 1;
        transform: translate3d(-25px, 0, 0)
      }

      75% {
        transform: translate3d(10px, 0, 0)
      }

      90% {
        transform: translate3d(-5px, 0, 0)
      }

      to {
        transform: none
      }
    }

    .bounceInRight {
      animation-name: bounceInRight
    }

    @keyframes bounceInUp {

      60%,
      75%,
      90%,
      from,
      to {
        animation-timing-function: cubic-bezier(.215, .61, .355, 1)
      }

      from {
        opacity: 0;
        transform: translate3d(0, 3000px, 0)
      }

      60% {
        opacity: 1;
        transform: translate3d(0, -20px, 0)
      }

      75% {
        transform: translate3d(0, 10px, 0)
      }

      90% {
        transform: translate3d(0, -5px, 0)
      }

      to {
        transform: translate3d(0, 0, 0)
      }
    }

    .bounceInUp {
      animation-name: bounceInUp
    }

    @keyframes fadeIn {
      from {
        opacity: 0
      }

      to {
        opacity: 1
      }
    }

    .fadeIn {
      animation-name: fadeIn
    }

    @keyframes fadeInDown {
      from {
        opacity: 0;
        transform: translate3d(0, -100%, 0)
      }

      to {
        opacity: 1;
        transform: none
      }
    }

    .fadeInDown {
      animation-name: fadeInDown
    }

    @keyframes fadeInLeft {
      from {
        opacity: 0;
        transform: translate3d(-100%, 0, 0)
      }

      to {
        opacity: 1;
        transform: none
      }
    }

    .fadeInLeft {
      animation-name: fadeInLeft
    }

    @keyframes fadeInRight {
      from {
        opacity: 0;
        transform: translate3d(100%, 0, 0)
      }

      to {
        opacity: 1;
        transform: none
      }
    }

    .fadeInRight {
      animation-name: fadeInRight
    }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translate3d(0, 100%, 0)
      }

      to {
        opacity: 1;
        transform: none
      }
    }

    .fadeInUp {
      animation-name: fadeInUp
    }

    @keyframes lightSpeedIn {
      from {
        transform: translate3d(100%, 0, 0) skewX(-30deg);
        opacity: 0
      }

      60% {
        transform: skewX(20deg);
        opacity: 1
      }

      80% {
        transform: skewX(-5deg);
        opacity: 1
      }

      to {
        transform: none;
        opacity: 1
      }
    }

    .lightSpeedIn {
      animation-name: lightSpeedIn;
      animation-timing-function: ease-out
    }

    @keyframes rotateIn {
      from {
        transform-origin: center;
        transform: rotate3d(0, 0, 1, -200deg);
        opacity: 0
      }

      to {
        transform-origin: center;
        transform: none;
        opacity: 1
      }
    }

    .rotateIn {
      animation-name: rotateIn
    }

    @keyframes rotateInDownLeft {
      from {
        transform-origin: left bottom;
        transform: rotate3d(0, 0, 1, -45deg);
        opacity: 0
      }

      to {
        transform-origin: left bottom;
        transform: none;
        opacity: 1
      }
    }

    .rotateInDownLeft {
      animation-name: rotateInDownLeft
    }

    @keyframes rotateInDownRight {
      from {
        transform-origin: right bottom;
        transform: rotate3d(0, 0, 1, 45deg);
        opacity: 0
      }

      to {
        transform-origin: right bottom;
        transform: none;
        opacity: 1
      }
    }

    .rotateInDownRight {
      animation-name: rotateInDownRight
    }

    @keyframes rotateInUpLeft {
      from {
        transform-origin: left bottom;
        transform: rotate3d(0, 0, 1, 45deg);
        opacity: 0
      }

      to {
        transform-origin: left bottom;
        transform: none;
        opacity: 1
      }
    }

    .rotateInUpLeft {
      animation-name: rotateInUpLeft
    }

    @keyframes rotateInUpRight {
      from {
        transform-origin: right bottom;
        transform: rotate3d(0, 0, 1, -90deg);
        opacity: 0
      }

      to {
        transform-origin: right bottom;
        transform: none;
        opacity: 1
      }
    }

    .rotateInUpRight {
      animation-name: rotateInUpRight
    }

    @keyframes rollIn {
      from {
        opacity: 0;
        transform: translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg)
      }

      to {
        opacity: 1;
        transform: none
      }
    }

    .rollIn {
      animation-name: rollIn
    }

    @keyframes zoomIn {
      from {
        opacity: 0;
        transform: scale3d(.3, .3, .3)
      }

      50% {
        opacity: 1
      }
    }

    .zoomIn {
      animation-name: zoomIn
    }

    @keyframes zoomInDown {
      from {
        opacity: 0;
        transform: scale3d(.1, .1, .1) translate3d(0, -1000px, 0);
        animation-timing-function: cubic-bezier(.55, .055, .675, .19)
      }

      60% {
        opacity: 1;
        transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
        animation-timing-function: cubic-bezier(.175, .885, .32, 1)
      }
    }

    .zoomInDown {
      animation-name: zoomInDown
    }

    @keyframes zoomInLeft {
      from {
        opacity: 0;
        transform: scale3d(.1, .1, .1) translate3d(-1000px, 0, 0);
        animation-timing-function: cubic-bezier(.55, .055, .675, .19)
      }

      60% {
        opacity: 1;
        transform: scale3d(.475, .475, .475) translate3d(10px, 0, 0);
        animation-timing-function: cubic-bezier(.175, .885, .32, 1)
      }
    }

    .zoomInLeft {
      animation-name: zoomInLeft
    }

    @keyframes zoomInRight {
      from {
        opacity: 0;
        transform: scale3d(.1, .1, .1) translate3d(1000px, 0, 0);
        animation-timing-function: cubic-bezier(.55, .055, .675, .19)
      }

      60% {
        opacity: 1;
        transform: scale3d(.475, .475, .475) translate3d(-10px, 0, 0);
        animation-timing-function: cubic-bezier(.175, .885, .32, 1)
      }
    }

    .zoomInRight {
      animation-name: zoomInRight
    }

    @keyframes zoomInUp {
      from {
        opacity: 0;
        transform: scale3d(.1, .1, .1) translate3d(0, 1000px, 0);
        animation-timing-function: cubic-bezier(.55, .055, .675, .19)
      }

      60% {
        opacity: 1;
        transform: scale3d(.475, .475, .475) translate3d(0, -60px, 0);
        animation-timing-function: cubic-bezier(.175, .885, .32, 1)
      }
    }

    .zoomInUp {
      animation-name: zoomInUp
    }

    @keyframes slideInDown {
      from {
        transform: translate3d(0, -100%, 0);
        visibility: visible
      }

      to {
        transform: translate3d(0, 0, 0)
      }
    }

    .slideInDown {
      animation-name: slideInDown
    }

    @keyframes slideInLeft {
      from {
        transform: translate3d(-100%, 0, 0);
        visibility: visible
      }

      to {
        transform: translate3d(0, 0, 0)
      }
    }

    .slideInLeft {
      animation-name: slideInLeft
    }

    @keyframes slideInRight {
      from {
        transform: translate3d(100%, 0, 0);
        visibility: visible
      }

      to {
        transform: translate3d(0, 0, 0)
      }
    }

    .slideInRight {
      animation-name: slideInRight
    }

    @keyframes slideInUp {
      from {
        transform: translate3d(0, 100%, 0);
        visibility: visible
      }

      to {
        transform: translate3d(0, 0, 0)
      }
    }

    .slideInUp {
      animation-name: slideInUp
    }

    .elementor-animation-grow {
      transition-duration: .3s;
      transition-property: transform
    }

    .elementor-animation-grow:active,
    .elementor-animation-grow:focus,
    .elementor-animation-grow:hover {
      transform: scale(1.1)
    }

    .elementor-animation-shrink {
      transition-duration: .3s;
      transition-property: transform
    }

    .elementor-animation-shrink:active,
    .elementor-animation-shrink:focus,
    .elementor-animation-shrink:hover {
      transform: scale(0.9)
    }

    @keyframes elementor-animation-pulse {
      25% {
        transform: scale(1.1)
      }

      75% {
        transform: scale(0.9)
      }
    }

    .elementor-animation-pulse:active,
    .elementor-animation-pulse:focus,
    .elementor-animation-pulse:hover {
      animation-name: elementor-animation-pulse;
      animation-duration: 1s;
      animation-timing-function: linear;
      animation-iteration-count: infinite
    }

    @keyframes elementor-animation-pulse-grow {
      to {
        transform: scale(1.1)
      }
    }

    .elementor-animation-pulse-grow:active,
    .elementor-animation-pulse-grow:focus,
    .elementor-animation-pulse-grow:hover {
      animation-name: elementor-animation-pulse-grow;
      animation-duration: .3s;
      animation-timing-function: linear;
      animation-iteration-count: infinite;
      animation-direction: alternate
    }

    @keyframes elementor-animation-pulse-shrink {
      to {
        transform: scale(0.9)
      }
    }

    .elementor-animation-pulse-shrink:active,
    .elementor-animation-pulse-shrink:focus,
    .elementor-animation-pulse-shrink:hover {
      animation-name: elementor-animation-pulse-shrink;
      animation-duration: .3s;
      animation-timing-function: linear;
      animation-iteration-count: infinite;
      animation-direction: alternate
    }

    @keyframes elementor-animation-push {
      50% {
        transform: scale(0.8)
      }

      100% {
        transform: scale(1)
      }
    }

    .elementor-animation-push:active,
    .elementor-animation-push:focus,
    .elementor-animation-push:hover {
      animation-name: elementor-animation-push;
      animation-duration: .3s;
      animation-timing-function: linear;
      animation-iteration-count: 1
    }

    @keyframes elementor-animation-pop {
      50% {
        transform: scale(1.2)
      }
    }

    .elementor-animation-pop:active,
    .elementor-animation-pop:focus,
    .elementor-animation-pop:hover {
      animation-name: elementor-animation-pop;
      animation-duration: .3s;
      animation-timing-function: linear;
      animation-iteration-count: 1
    }

    .elementor-animation-bounce-in {
      transition-duration: .5s
    }

    .elementor-animation-bounce-in:active,
    .elementor-animation-bounce-in:focus,
    .elementor-animation-bounce-in:hover {
      transform: scale(1.2);
      transition-timing-function: cubic-bezier(0.47, 2.02, .31, -.36)
    }

    .elementor-animation-bounce-out {
      transition-duration: .5s
    }

    .elementor-animation-bounce-out:active,
    .elementor-animation-bounce-out:focus,
    .elementor-animation-bounce-out:hover {
      transform: scale(0.8);
      transition-timing-function: cubic-bezier(0.47, 2.02, .31, -.36)
    }

    .elementor-animation-rotate {
      transition-duration: .3s;
      transition-property: transform
    }

    .elementor-animation-rotate:active,
    .elementor-animation-rotate:focus,
    .elementor-animation-rotate:hover {
      transform: rotate(4deg)
    }

    .elementor-animation-grow-rotate {
      transition-duration: .3s;
      transition-property: transform
    }

    .elementor-animation-grow-rotate:active,
    .elementor-animation-grow-rotate:focus,
    .elementor-animation-grow-rotate:hover {
      transform: scale(1.1) rotate(4deg)
    }

    .elementor-animation-float {
      transition-duration: .3s;
      transition-property: transform;
      transition-timing-function: ease-out
    }

    .elementor-animation-float:active,
    .elementor-animation-float:focus,
    .elementor-animation-float:hover {
      transform: translateY(-8px)
    }

    .elementor-animation-sink {
      transition-duration: .3s;
      transition-property: transform;
      transition-timing-function: ease-out
    }

    .elementor-animation-sink:active,
    .elementor-animation-sink:focus,
    .elementor-animation-sink:hover {
      transform: translateY(8px)
    }

    @keyframes elementor-animation-bob {
      0% {
        transform: translateY(-8px)
      }

      50% {
        transform: translateY(-4px)
      }

      100% {
        transform: translateY(-8px)
      }
    }

    @keyframes elementor-animation-bob-float {
      100% {
        transform: translateY(-8px)
      }
    }

    .elementor-animation-bob:active,
    .elementor-animation-bob:focus,
    .elementor-animation-bob:hover {
      animation-name: elementor-animation-bob-float, elementor-animation-bob;
      animation-duration: .3s, 1.5s;
      animation-delay: 0s, .3s;
      animation-timing-function: ease-out, ease-in-out;
      animation-iteration-count: 1, infinite;
      animation-fill-mode: forwards;
      animation-direction: normal, alternate
    }

    @keyframes elementor-animation-hang {
      0% {
        transform: translateY(8px)
      }

      50% {
        transform: translateY(4px)
      }

      100% {
        transform: translateY(8px)
      }
    }

    @keyframes elementor-animation-hang-sink {
      100% {
        transform: translateY(8px)
      }
    }

    .elementor-animation-hang:active,
    .elementor-animation-hang:focus,
    .elementor-animation-hang:hover {
      animation-name: elementor-animation-hang-sink, elementor-animation-hang;
      animation-duration: .3s, 1.5s;
      animation-delay: 0s, .3s;
      animation-timing-function: ease-out, ease-in-out;
      animation-iteration-count: 1, infinite;
      animation-fill-mode: forwards;
      animation-direction: normal, alternate
    }

    .elementor-animation-skew {
      transition-duration: .3s;
      transition-property: transform
    }

    .elementor-animation-skew:active,
    .elementor-animation-skew:focus,
    .elementor-animation-skew:hover {
      transform: skew(-10deg)
    }

    .elementor-animation-skew-forward {
      transition-duration: .3s;
      transition-property: transform;
      transform-origin: 0 100%
    }

    .elementor-animation-skew-forward:active,
    .elementor-animation-skew-forward:focus,
    .elementor-animation-skew-forward:hover {
      transform: skew(-10deg)
    }

    .elementor-animation-skew-backward {
      transition-duration: .3s;
      transition-property: transform;
      transform-origin: 0 100%
    }

    .elementor-animation-skew-backward:active,
    .elementor-animation-skew-backward:focus,
    .elementor-animation-skew-backward:hover {
      transform: skew(10deg)
    }

    @keyframes elementor-animation-wobble-vertical {
      16.65% {
        transform: translateY(8px)
      }

      33.3% {
        transform: translateY(-6px)
      }

      49.95% {
        transform: translateY(4px)
      }

      66.6% {
        transform: translateY(-2px)
      }

      83.25% {
        transform: translateY(1px)
      }

      100% {
        transform: translateY(0)
      }
    }

    .elementor-animation-wobble-vertical:active,
    .elementor-animation-wobble-vertical:focus,
    .elementor-animation-wobble-vertical:hover {
      animation-name: elementor-animation-wobble-vertical;
      animation-duration: 1s;
      animation-timing-function: ease-in-out;
      animation-iteration-count: 1
    }

    @keyframes elementor-animation-wobble-horizontal {
      16.65% {
        transform: translateX(8px)
      }

      33.3% {
        transform: translateX(-6px)
      }

      49.95% {
        transform: translateX(4px)
      }

      66.6% {
        transform: translateX(-2px)
      }

      83.25% {
        transform: translateX(1px)
      }

      100% {
        transform: translateX(0)
      }
    }

    .elementor-animation-wobble-horizontal:active,
    .elementor-animation-wobble-horizontal:focus,
    .elementor-animation-wobble-horizontal:hover {
      animation-name: elementor-animation-wobble-horizontal;
      animation-duration: 1s;
      animation-timing-function: ease-in-out;
      animation-iteration-count: 1
    }

    @keyframes elementor-animation-wobble-to-bottom-right {
      16.65% {
        transform: translate(8px, 8px)
      }

      33.3% {
        transform: translate(-6px, -6px)
      }

      49.95% {
        transform: translate(4px, 4px)
      }

      66.6% {
        transform: translate(-2px, -2px)
      }

      83.25% {
        transform: translate(1px, 1px)
      }

      100% {
        transform: translate(0, 0)
      }
    }

    .elementor-animation-wobble-to-bottom-right:active,
    .elementor-animation-wobble-to-bottom-right:focus,
    .elementor-animation-wobble-to-bottom-right:hover {
      animation-name: elementor-animation-wobble-to-bottom-right;
      animation-duration: 1s;
      animation-timing-function: ease-in-out;
      animation-iteration-count: 1
    }

    @keyframes elementor-animation-wobble-to-top-right {
      16.65% {
        transform: translate(8px, -8px)
      }

      33.3% {
        transform: translate(-6px, 6px)
      }

      49.95% {
        transform: translate(4px, -4px)
      }

      66.6% {
        transform: translate(-2px, 2px)
      }

      83.25% {
        transform: translate(1px, -1px)
      }

      100% {
        transform: translate(0, 0)
      }
    }

    .elementor-animation-wobble-to-top-right:active,
    .elementor-animation-wobble-to-top-right:focus,
    .elementor-animation-wobble-to-top-right:hover {
      animation-name: elementor-animation-wobble-to-top-right;
      animation-duration: 1s;
      animation-timing-function: ease-in-out;
      animation-iteration-count: 1
    }

    @keyframes elementor-animation-wobble-top {
      16.65% {
        transform: skew(-12deg)
      }

      33.3% {
        transform: skew(10deg)
      }

      49.95% {
        transform: skew(-6deg)
      }

      66.6% {
        transform: skew(4deg)
      }

      83.25% {
        transform: skew(-2deg)
      }

      100% {
        transform: skew(0)
      }
    }

    .elementor-animation-wobble-top {
      transform-origin: 0 100%
    }

    .elementor-animation-wobble-top:active,
    .elementor-animation-wobble-top:focus,
    .elementor-animation-wobble-top:hover {
      animation-name: elementor-animation-wobble-top;
      animation-duration: 1s;
      animation-timing-function: ease-in-out;
      animation-iteration-count: 1
    }

    @keyframes elementor-animation-wobble-bottom {
      16.65% {
        transform: skew(-12deg)
      }

      33.3% {
        transform: skew(10deg)
      }

      49.95% {
        transform: skew(-6deg)
      }

      66.6% {
        transform: skew(4deg)
      }

      83.25% {
        transform: skew(-2deg)
      }

      100% {
        transform: skew(0)
      }
    }

    .elementor-animation-wobble-bottom {
      transform-origin: 100% 0
    }

    .elementor-animation-wobble-bottom:active,
    .elementor-animation-wobble-bottom:focus,
    .elementor-animation-wobble-bottom:hover {
      animation-name: elementor-animation-wobble-bottom;
      animation-duration: 1s;
      animation-timing-function: ease-in-out;
      animation-iteration-count: 1
    }

    @keyframes elementor-animation-wobble-skew {
      16.65% {
        transform: skew(-12deg)
      }

      33.3% {
        transform: skew(10deg)
      }

      49.95% {
        transform: skew(-6deg)
      }

      66.6% {
        transform: skew(4deg)
      }

      83.25% {
        transform: skew(-2deg)
      }

      100% {
        transform: skew(0)
      }
    }

    .elementor-animation-wobble-skew:active,
    .elementor-animation-wobble-skew:focus,
    .elementor-animation-wobble-skew:hover {
      animation-name: elementor-animation-wobble-skew;
      animation-duration: 1s;
      animation-timing-function: ease-in-out;
      animation-iteration-count: 1
    }

    @keyframes elementor-animation-buzz {
      50% {
        transform: translateX(3px) rotate(2deg)
      }

      100% {
        transform: translateX(-3px) rotate(-2deg)
      }
    }

    .elementor-animation-buzz:active,
    .elementor-animation-buzz:focus,
    .elementor-animation-buzz:hover {
      animation-name: elementor-animation-buzz;
      animation-duration: .15s;
      animation-timing-function: linear;
      animation-iteration-count: infinite
    }

    @keyframes elementor-animation-buzz-out {
      10% {
        transform: translateX(3px) rotate(2deg)
      }

      20% {
        transform: translateX(-3px) rotate(-2deg)
      }

      30% {
        transform: translateX(3px) rotate(2deg)
      }

      40% {
        transform: translateX(-3px) rotate(-2deg)
      }

      50% {
        transform: translateX(2px) rotate(1deg)
      }

      60% {
        transform: translateX(-2px) rotate(-1deg)
      }

      70% {
        transform: translateX(2px) rotate(1deg)
      }

      80% {
        transform: translateX(-2px) rotate(-1deg)
      }

      90% {
        transform: translateX(1px) rotate(0)
      }

      100% {
        transform: translateX(-1px) rotate(0)
      }
    }

    .elementor-animation-buzz-out:active,
    .elementor-animation-buzz-out:focus,
    .elementor-animation-buzz-out:hover {
      animation-name: elementor-animation-buzz-out;
      animation-duration: .75s;
      animation-timing-function: linear;
      animation-iteration-count: 1
    }

    /*! elementor - v3.0.16 - 06-01-2021 */
    .elementor-bc-flex-widget .elementor-section-content-top>.elementor-container>.elementor-row>.elementor-column>.elementor-column-wrap {
      -webkit-box-align: start;
      -ms-flex-align: start;
      align-items: flex-start
    }

    .elementor-bc-flex-widget .elementor-section-content-middle>.elementor-container>.elementor-row>.elementor-column>.elementor-column-wrap {
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center
    }

    .elementor-bc-flex-widget .elementor-section-content-bottom>.elementor-container>.elementor-row>.elementor-column>.elementor-column-wrap {
      -webkit-box-align: end;
      -ms-flex-align: end;
      align-items: flex-end
    }

    .elementor-column-gap-narrow>.elementor-row>.elementor-column>.elementor-element-populated {
      padding: 5px
    }

    .elementor-column-gap-default>.elementor-row>.elementor-column>.elementor-element-populated {
      padding: 10px
    }

    .elementor-column-gap-extended>.elementor-row>.elementor-column>.elementor-element-populated {
      padding: 15px
    }

    .elementor-column-gap-wide>.elementor-row>.elementor-column>.elementor-element-populated {
      padding: 20px
    }

    .elementor-column-gap-wider>.elementor-row>.elementor-column>.elementor-element-populated {
      padding: 30px
    }

    @media (min-width:768px) and (max-width:1024px) {
      .elementor-reverse-tablet>.elementor-container>.elementor-row>:first-child {
        -webkit-box-ordinal-group: 11;
        -ms-flex-order: 10;
        order: 10
      }

      .elementor-reverse-tablet>.elementor-container>.elementor-row>:nth-child(2) {
        -webkit-box-ordinal-group: 10;
        -ms-flex-order: 9;
        order: 9
      }

      .elementor-reverse-tablet>.elementor-container>.elementor-row>:nth-child(3) {
        -webkit-box-ordinal-group: 9;
        -ms-flex-order: 8;
        order: 8
      }

      .elementor-reverse-tablet>.elementor-container>.elementor-row>:nth-child(4) {
        -webkit-box-ordinal-group: 8;
        -ms-flex-order: 7;
        order: 7
      }

      .elementor-reverse-tablet>.elementor-container>.elementor-row>:nth-child(5) {
        -webkit-box-ordinal-group: 7;
        -ms-flex-order: 6;
        order: 6
      }

      .elementor-reverse-tablet>.elementor-container>.elementor-row>:nth-child(6) {
        -webkit-box-ordinal-group: 6;
        -ms-flex-order: 5;
        order: 5
      }

      .elementor-reverse-tablet>.elementor-container>.elementor-row>:nth-child(7) {
        -webkit-box-ordinal-group: 5;
        -ms-flex-order: 4;
        order: 4
      }

      .elementor-reverse-tablet>.elementor-container>.elementor-row>:nth-child(8) {
        -webkit-box-ordinal-group: 4;
        -ms-flex-order: 3;
        order: 3
      }

      .elementor-reverse-tablet>.elementor-container>.elementor-row>:nth-child(9) {
        -webkit-box-ordinal-group: 3;
        -ms-flex-order: 2;
        order: 2
      }

      .elementor-reverse-tablet>.elementor-container>.elementor-row>:nth-child(10) {
        -webkit-box-ordinal-group: 2;
        -ms-flex-order: 1;
        order: 1
      }
    }

    @media (max-width:767px) {
      .elementor-reverse-mobile>.elementor-container>.elementor-row>:first-child {
        -webkit-box-ordinal-group: 11;
        -ms-flex-order: 10;
        order: 10
      }

      .elementor-reverse-mobile>.elementor-container>.elementor-row>:nth-child(2) {
        -webkit-box-ordinal-group: 10;
        -ms-flex-order: 9;
        order: 9
      }

      .elementor-reverse-mobile>.elementor-container>.elementor-row>:nth-child(3) {
        -webkit-box-ordinal-group: 9;
        -ms-flex-order: 8;
        order: 8
      }

      .elementor-reverse-mobile>.elementor-container>.elementor-row>:nth-child(4) {
        -webkit-box-ordinal-group: 8;
        -ms-flex-order: 7;
        order: 7
      }

      .elementor-reverse-mobile>.elementor-container>.elementor-row>:nth-child(5) {
        -webkit-box-ordinal-group: 7;
        -ms-flex-order: 6;
        order: 6
      }

      .elementor-reverse-mobile>.elementor-container>.elementor-row>:nth-child(6) {
        -webkit-box-ordinal-group: 6;
        -ms-flex-order: 5;
        order: 5
      }

      .elementor-reverse-mobile>.elementor-container>.elementor-row>:nth-child(7) {
        -webkit-box-ordinal-group: 5;
        -ms-flex-order: 4;
        order: 4
      }

      .elementor-reverse-mobile>.elementor-container>.elementor-row>:nth-child(8) {
        -webkit-box-ordinal-group: 4;
        -ms-flex-order: 3;
        order: 3
      }

      .elementor-reverse-mobile>.elementor-container>.elementor-row>:nth-child(9) {
        -webkit-box-ordinal-group: 3;
        -ms-flex-order: 2;
        order: 2
      }

      .elementor-reverse-mobile>.elementor-container>.elementor-row>:nth-child(10) {
        -webkit-box-ordinal-group: 2;
        -ms-flex-order: 1;
        order: 1
      }

      .elementor-column {
        width: 100%
      }
    }

    /*! elementor - v3.0.16 - 06-01-2021 */
    .dialog-widget-content {
      background-color: #fff;
      position: absolute;
      -webkit-border-radius: 3px;
      border-radius: 3px;
      -webkit-box-shadow: 2px 8px 23px 3px rgba(0, 0, 0, .2);
      box-shadow: 2px 8px 23px 3px rgba(0, 0, 0, .2);
      overflow: hidden
    }

    .dialog-message {
      font-size: 12px;
      line-height: 1.5;
      -webkit-box-sizing: border-box;
      box-sizing: border-box
    }

    .dialog-type-lightbox {
      position: fixed;
      height: 100%;
      width: 100%;
      bottom: 0;
      left: 0;
      background-color: rgba(0, 0, 0, .8);
      z-index: 9999;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none
    }

    .dialog-type-lightbox .dialog-widget-content {
      margin: auto;
      width: 375px
    }

    .dialog-type-lightbox .dialog-header {
      font-size: 15px;
      color: #495157;
      padding: 30px 0 10px;
      font-weight: 500
    }

    .dialog-type-lightbox .dialog-message {
      padding: 0 30px 30px;
      min-height: 50px
    }

    .dialog-type-lightbox:not(.elementor-popup-modal) .dialog-header,
    .dialog-type-lightbox:not(.elementor-popup-modal) .dialog-message {
      text-align: center
    }

    .dialog-type-lightbox .dialog-buttons-wrapper {
      border-top: 1px solid #e6e9ec;
      text-align: center
    }

    .dialog-type-lightbox .dialog-buttons-wrapper>.dialog-button {
      font-family: Roboto, Arial, Helvetica, Verdana, sans-serif;
      width: 50%;
      border: none;
      background: none;
      color: #6d7882;
      font-size: 15px;
      cursor: pointer;
      padding: 13px 0;
      outline: 0
    }

    .dialog-type-lightbox .dialog-buttons-wrapper>.dialog-button:hover {
      background-color: #f4f6f7
    }

    .dialog-type-lightbox .dialog-buttons-wrapper>.dialog-button.dialog-ok {
      color: #b01b1b
    }

    .dialog-type-lightbox .dialog-buttons-wrapper>.dialog-button.dialog-take_over {
      color: #39b54a
    }

    .dialog-type-lightbox .dialog-buttons-wrapper>.dialog-button:active {
      background-color: rgba(230, 233, 236, .5)
    }

    .dialog-type-lightbox .dialog-buttons-wrapper>.dialog-button::-moz-focus-inner {
      border: 0
    }

    .dialog-close-button {
      cursor: pointer;
      position: absolute;
      margin-top: 15px;
      right: 15px;
      font-size: 15px;
      line-height: 1
    }

    .dialog-close-button:not(:hover) {
      opacity: .4
    }

    .dialog-alert-widget .dialog-buttons-wrapper>button {
      width: 100%
    }

    .dialog-confirm-widget .dialog-button:first-child {
      border-right: 1px solid #e6e9ec
    }

    .dialog-prevent-scroll {
      overflow: hidden;
      max-height: 100vh
    }

    @media (min-width:1024px) {
      body.admin-bar .dialog-lightbox-widget {
        height: calc(100vh - 32px)
      }
    }

    @media (max-width:1024px) {
      body.admin-bar .dialog-type-lightbox {
        position: -webkit-sticky;
        position: sticky;
        height: 100vh
      }
    }

    .elementor-aspect-ratio-219 .elementor-fit-aspect-ratio {
      padding-bottom: 42.8571%
    }

    .elementor-aspect-ratio-169 .elementor-fit-aspect-ratio {
      padding-bottom: 56.25%
    }

    .elementor-aspect-ratio-43 .elementor-fit-aspect-ratio {
      padding-bottom: 75%
    }

    .elementor-aspect-ratio-32 .elementor-fit-aspect-ratio {
      padding-bottom: 66.6666%
    }

    .elementor-aspect-ratio-11 .elementor-fit-aspect-ratio {
      padding-bottom: 100%
    }

    .elementor-aspect-ratio-916 .elementor-fit-aspect-ratio {
      padding-bottom: 177.8%
    }

    .elementor-fit-aspect-ratio {
      position: relative;
      height: 0
    }

    .elementor-fit-aspect-ratio iframe {
      position: absolute;
      top: 0;
      left: 0;
      height: 100%;
      width: 100%;
      border: 0;
      background-color: #000
    }

    .elementor-fit-aspect-ratio video {
      width: 100%
    }

    .flatpickr-calendar {
      width: 280px
    }

    .flatpickr-calendar .flatpickr-current-month span.cur-month {
      font-weight: 300
    }

    .flatpickr-calendar .dayContainer {
      width: 280px;
      min-width: 280px;
      max-width: 280px
    }

    .flatpickr-calendar .flatpickr-days {
      width: 280px
    }

    .flatpickr-calendar .flatpickr-day {
      max-width: 37px;
      height: 37px;
      line-height: 37px
    }

    .elementor-templates-modal .dialog-widget-content {
      font-family: Roboto, Arial, Helvetica, Verdana, sans-serif;
      background-color: #f1f3f5;
      width: 100%
    }

    @media (max-width:1439px) {
      .elementor-templates-modal .dialog-widget-content {
        max-width: 990px
      }
    }

    @media (min-width:1440px) {
      .elementor-templates-modal .dialog-widget-content {
        max-width: 1200px
      }
    }

    .elementor-templates-modal .dialog-header {
      padding: 0;
      z-index: 1
    }

    .elementor-templates-modal .dialog-buttons-wrapper,
    .elementor-templates-modal .dialog-header {
      background-color: #fff;
      -webkit-box-shadow: 0 0 8px rgba(0, 0, 0, .1);
      box-shadow: 0 0 8px rgba(0, 0, 0, .1);
      position: relative
    }

    .elementor-templates-modal .dialog-buttons-wrapper {
      border: none;
      display: none;
      -webkit-box-pack: end;
      -ms-flex-pack: end;
      justify-content: flex-end;
      padding: 5px
    }

    .elementor-templates-modal .dialog-buttons-wrapper .elementor-button {
      height: 40px;
      margin-left: 5px
    }

    .elementor-templates-modal .dialog-buttons-wrapper .elementor-button-success {
      padding: 12px 36px;
      color: #fff;
      width: auto;
      font-size: 15px
    }

    .elementor-templates-modal .dialog-buttons-wrapper .elementor-button-success:hover {
      background-color: #39b54a
    }

    .elementor-templates-modal .dialog-message {
      height: 750px;
      max-height: 85vh;
      overflow: auto;
      padding-top: 25px
    }

    .elementor-templates-modal .dialog-content {
      height: 100%
    }

    .elementor-templates-modal .dialog-loading {
      display: none
    }

    .elementor-templates-modal__header {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      -webkit-box-pack: justify;
      -ms-flex-pack: justify;
      justify-content: space-between;
      height: 50px
    }

    .elementor-templates-modal__header__logo {
      line-height: 1;
      text-transform: uppercase;
      font-weight: 700;
      cursor: pointer
    }

    .elementor-templates-modal__header__logo-area {
      text-align: left;
      padding-left: 15px
    }

    .elementor-templates-modal__header__logo-area>* {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center
    }

    .elementor-templates-modal__header__logo__icon-wrapper {
      margin-right: 10px;
      font-size: 12px
    }

    .elementor-templates-modal__header__logo__title {
      padding-top: 2px
    }

    .elementor-templates-modal__header__items-area {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-orient: horizontal;
      -webkit-box-direction: reverse;
      -ms-flex-direction: row-reverse;
      flex-direction: row-reverse
    }

    .elementor-templates-modal__header__item {
      position: relative;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center;
      -webkit-box-sizing: content-box;
      box-sizing: content-box
    }

    .elementor-templates-modal__header__item>i {
      font-size: 20px;
      -webkit-transition: all .3s;
      -o-transition: all .3s;
      transition: all .3s;
      cursor: pointer
    }

    .elementor-templates-modal__header__item>i:not(:hover) {
      color: #a4afb7
    }

    .elementor-templates-modal__header__close--normal {
      width: 47px;
      border-left: 1px solid #e6e9ec
    }

    .elementor-templates-modal__header__close--normal i {
      font-size: 18px
    }

    .elementor-templates-modal__header__close--skip {
      padding: 10px 10px 10px 20px;
      margin-right: 10px;
      color: #fff;
      background-color: #a4afb7;
      font-size: 11px;
      font-weight: 400;
      line-height: 1;
      text-transform: uppercase;
      -webkit-border-radius: 2px;
      border-radius: 2px;
      cursor: pointer
    }

    .elementor-templates-modal__header__close--skip>i {
      font-size: inherit;
      padding-left: 10px;
      margin-left: 15px;
      border-left: 1px solid
    }

    .elementor-templates-modal__header__close--skip>i:not(:hover) {
      color: #fff
    }

    .elementor-templates-modal__sidebar {
      -ms-flex-negative: 0;
      flex-shrink: 0;
      width: 25%;
      background-color: hsla(0, 0%, 100%, .3)
    }

    .elementor-templates-modal__content {
      -webkit-box-flex: 1;
      -ms-flex-positive: 1;
      flex-grow: 1;
      -webkit-box-shadow: 0 0 13px inset rgba(0, 0, 0, .05);
      box-shadow: inset 0 0 13px rgba(0, 0, 0, .05)
    }

    #wpadminbar #wp-admin-bar-elementor_app_site_editor a.ab-item:before {
      content: "\e91d";
      font-family: eicons;
      top: 4px;
      font-size: 13px;
      color: inherit
    }

    .elementor-hidden {
      display: none
    }

    .elementor-screen-only,
    .screen-reader-text,
    .screen-reader-text span,
    .ui-helper-hidden-accessible {
      position: absolute;
      top: -10000em;
      width: 1px;
      height: 1px;
      margin: -1px;
      padding: 0;
      overflow: hidden;
      clip: rect(0, 0, 0, 0);
      border: 0
    }

    .elementor-clearfix:after {
      content: "";
      display: block;
      clear: both;
      width: 0;
      height: 0
    }

    .e-logo-wrapper {
      background: #93003c;
      display: inline-block;
      padding: .75em;
      -webkit-border-radius: 50%;
      border-radius: 50%;
      line-height: 1
    }

    .e-logo-wrapper i {
      color: #fff;
      font-size: 1em
    }

    .elementor {
      -webkit-hyphens: manual;
      -ms-hyphens: manual;
      hyphens: manual
    }

    .elementor *,
    .elementor :after,
    .elementor :before {
      -webkit-box-sizing: border-box;
      box-sizing: border-box
    }

    .elementor a {
      -webkit-box-shadow: none;
      box-shadow: none;
      text-decoration: none
    }

    .elementor hr {
      margin: 0;
      background-color: transparent
    }

    .elementor img {
      height: auto;
      max-width: 100%;
      border: none;
      -webkit-border-radius: 0;
      border-radius: 0;
      -webkit-box-shadow: none;
      box-shadow: none
    }

    .elementor .elementor-widget:not(.elementor-widget-text-editor):not(.elementor-widget-theme-post-content) figure {
      margin: 0
    }

    .elementor embed,
    .elementor iframe,
    .elementor object,
    .elementor video {
      max-width: 100%;
      width: 100%;
      margin: 0;
      line-height: 1;
      border: none
    }

    .elementor .elementor-custom-embed {
      line-height: 0
    }

    .elementor .elementor-background,
    .elementor .elementor-background-holder,
    .elementor .elementor-background-video-container {
      height: 100%;
      width: 100%;
      top: 0;
      left: 0;
      position: absolute;
      overflow: hidden;
      z-index: 0;
      direction: ltr
    }

    .elementor .elementor-background-video-container {
      -webkit-transition: opacity 1s;
      -o-transition: opacity 1s;
      transition: opacity 1s;
      pointer-events: none
    }

    .elementor .elementor-background-video-container.elementor-loading {
      opacity: 0
    }

    .elementor .elementor-background-video-embed {
      max-width: none
    }

    .elementor .elementor-background-video,
    .elementor .elementor-background-video-embed,
    .elementor .elementor-background-video-hosted {
      position: absolute;
      top: 50%;
      left: 50%;
      -webkit-transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%)
    }

    .elementor .elementor-background-video {
      max-width: none
    }

    .elementor .elementor-html5-video {
      -o-object-fit: cover;
      object-fit: cover
    }

    .elementor .elementor-background-overlay,
    .elementor .elementor-background-slideshow {
      height: 100%;
      width: 100%;
      top: 0;
      left: 0;
      position: absolute
    }

    .elementor .elementor-background-slideshow {
      z-index: 0
    }

    .elementor .elementor-background-slideshow__slide__image {
      width: 100%;
      height: 100%;
      background-position: 50%;
      -webkit-background-size: cover;
      background-size: cover
    }

    .elementor-widget-wrap>.elementor-element.elementor-absolute {
      position: absolute
    }

    .elementor-widget-wrap>.elementor-element.elementor-fixed {
      position: fixed
    }

    .elementor-widget-wrap .elementor-element.elementor-widget__width-auto,
    .elementor-widget-wrap .elementor-element.elementor-widget__width-initial {
      max-width: 100%
    }

    @media (max-width:1024px) {

      .elementor-widget-wrap .elementor-element.elementor-widget-tablet__width-auto,
      .elementor-widget-wrap .elementor-element.elementor-widget-tablet__width-initial {
        max-width: 100%
      }
    }

    @media (max-width:767px) {

      .elementor-widget-wrap .elementor-element.elementor-widget-mobile__width-auto,
      .elementor-widget-wrap .elementor-element.elementor-widget-mobile__width-initial {
        max-width: 100%
      }
    }

    .elementor-element.elementor-absolute,
    .elementor-element.elementor-fixed {
      z-index: 1
    }

    .elementor-invisible {
      visibility: hidden
    }

    .elementor-align-center {
      text-align: center
    }

    .elementor-align-center .elementor-button {
      width: auto
    }

    .elementor-align-right {
      text-align: right
    }

    .elementor-align-right .elementor-button {
      width: auto
    }

    .elementor-align-left {
      text-align: left
    }

    .elementor-align-left .elementor-button {
      width: auto
    }

    .elementor-align-justify .elementor-button {
      width: 100%
    }

    .elementor-custom-embed-play {
      position: absolute;
      top: 50%;
      left: 50%;
      -webkit-transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%)
    }

    .elementor-custom-embed-play i {
      font-size: 100px;
      color: #fff;
      opacity: .8;
      text-shadow: 1px 0 6px rgba(0, 0, 0, .3);
      -webkit-transition: all .5s;
      -o-transition: all .5s;
      transition: all .5s
    }

    .elementor-custom-embed-play.elementor-playing i {
      font-family: eicons;
      -webkit-animation: fa-spin 2s linear infinite;
      animation: fa-spin 2s linear infinite
    }

    .elementor-custom-embed-play.elementor-playing i:before {
      content: "\e8fb"
    }

    .elementor-tag {
      display: -webkit-inline-box;
      display: -ms-inline-flexbox;
      display: inline-flex
    }

    .elementor-ken-burns {
      -webkit-transition-property: -webkit-transform;
      transition-property: -webkit-transform;
      -o-transition-property: transform;
      transition-property: transform;
      transition-property: transform, -webkit-transform;
      -webkit-transition-duration: 10s;
      -o-transition-duration: 10s;
      transition-duration: 10s;
      -webkit-transition-timing-function: linear;
      -o-transition-timing-function: linear;
      transition-timing-function: linear
    }

    .elementor-ken-burns--out {
      -webkit-transform: scale(1.3);
      -ms-transform: scale(1.3);
      transform: scale(1.3)
    }

    .elementor-ken-burns--active {
      -webkit-transition-duration: 20s;
      -o-transition-duration: 20s;
      transition-duration: 20s
    }

    .elementor-ken-burns--active.elementor-ken-burns--out {
      -webkit-transform: scale(1);
      -ms-transform: scale(1);
      transform: scale(1)
    }

    .elementor-ken-burns--active.elementor-ken-burns--in {
      -webkit-transform: scale(1.3);
      -ms-transform: scale(1.3);
      transform: scale(1.3)
    }

    @media (max-width:1024px) {
      .elementor-tablet-align-center {
        text-align: center
      }

      .elementor-tablet-align-center .elementor-button {
        width: auto
      }

      .elementor-tablet-align-right {
        text-align: right
      }

      .elementor-tablet-align-right .elementor-button {
        width: auto
      }

      .elementor-tablet-align-left {
        text-align: left
      }

      .elementor-tablet-align-left .elementor-button {
        width: auto
      }

      .elementor-tablet-align-justify .elementor-button {
        width: 100%
      }
    }

    @media (max-width:767px) {
      .elementor-mobile-align-center {
        text-align: center
      }

      .elementor-mobile-align-center .elementor-button {
        width: auto
      }

      .elementor-mobile-align-right {
        text-align: right
      }

      .elementor-mobile-align-right .elementor-button {
        width: auto
      }

      .elementor-mobile-align-left {
        text-align: left
      }

      .elementor-mobile-align-left .elementor-button {
        width: auto
      }

      .elementor-mobile-align-justify .elementor-button {
        width: 100%
      }
    }

    #wpadminbar #wp-admin-bar-elementor_edit_page>.ab-item:before {
      content: "\e813";
      font-family: eicons;
      top: 3px;
      font-size: 18px
    }

    #wpadminbar #wp-admin-bar-elementor_inspector>.ab-item:before {
      content: "\f348";
      top: 2px
    }

    :root {
      --page-title-display: block
    }

    .elementor-page-title,
    h1.entry-title {
      display: var(--page-title-display)
    }

    .elementor-section {
      position: relative
    }

    .elementor-section .elementor-container {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      margin-right: auto;
      margin-left: auto;
      position: relative
    }

    @media (max-width:1024px) {
      .elementor-section .elementor-container {
        -ms-flex-wrap: wrap;
        flex-wrap: wrap
      }
    }

    .elementor-section.elementor-section-boxed>.elementor-container {
      max-width: 1140px
    }

    .elementor-section.elementor-section-stretched {
      position: relative;
      width: 100%
    }

    .elementor-section.elementor-section-items-top>.elementor-container {
      -webkit-box-align: start;
      -ms-flex-align: start;
      align-items: flex-start
    }

    .elementor-section.elementor-section-items-middle>.elementor-container {
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center
    }

    .elementor-section.elementor-section-items-bottom>.elementor-container {
      -webkit-box-align: end;
      -ms-flex-align: end;
      align-items: flex-end
    }

    @media (min-width:768px) {
      .elementor-section.elementor-section-height-full {
        height: 100vh
      }

      .elementor-section.elementor-section-height-full>.elementor-container {
        height: 100%
      }
    }

    .elementor-bc-flex-widget .elementor-section-content-top>.elementor-container>.elementor-column>.elementor-widget-wrap {
      -webkit-box-align: start;
      -ms-flex-align: start;
      align-items: flex-start
    }

    .elementor-bc-flex-widget .elementor-section-content-middle>.elementor-container>.elementor-column>.elementor-widget-wrap {
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center
    }

    .elementor-bc-flex-widget .elementor-section-content-bottom>.elementor-container>.elementor-column>.elementor-widget-wrap {
      -webkit-box-align: end;
      -ms-flex-align: end;
      align-items: flex-end
    }

    .elementor-row {
      width: 100%;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex
    }

    @media (max-width:1024px) {
      .elementor-row {
        -ms-flex-wrap: wrap;
        flex-wrap: wrap
      }
    }

    .elementor-widget-wrap {
      position: relative;
      width: 100%;
      -ms-flex-wrap: wrap;
      flex-wrap: wrap;
      -ms-flex-line-pack: start;
      align-content: flex-start
    }

    .elementor:not(.elementor-bc-flex-widget) .elementor-widget-wrap {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex
    }

    .elementor-widget-wrap>.elementor-element {
      width: 100%
    }

    .elementor-widget {
      position: relative
    }

    .elementor-widget:not(:last-child) {
      margin-bottom: 20px
    }

    .elementor-widget:not(:last-child).elementor-absolute,
    .elementor-widget:not(:last-child).elementor-widget__width-auto,
    .elementor-widget:not(:last-child).elementor-widget__width-initial {
      margin-bottom: 0
    }

    .elementor-column {
      min-height: 1px
    }

    .elementor-column,
    .elementor-column-wrap {
      position: relative;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex
    }

    .elementor-column-wrap {
      width: 100%
    }

    .elementor-column-gap-narrow>.elementor-column>.elementor-element-populated {
      padding: 5px
    }

    .elementor-column-gap-default>.elementor-column>.elementor-element-populated {
      padding: 10px
    }

    .elementor-column-gap-extended>.elementor-column>.elementor-element-populated {
      padding: 15px
    }

    .elementor-column-gap-wide>.elementor-column>.elementor-element-populated {
      padding: 20px
    }

    .elementor-column-gap-wider>.elementor-column>.elementor-element-populated {
      padding: 30px
    }

    .elementor-inner-section .elementor-column-gap-no .elementor-element-populated {
      padding: 0
    }

    @media (min-width:768px) {

      .elementor-column.elementor-col-10,
      .elementor-column[data-col="10"] {
        width: 10%
      }

      .elementor-column.elementor-col-11,
      .elementor-column[data-col="11"] {
        width: 11.111%
      }

      .elementor-column.elementor-col-12,
      .elementor-column[data-col="12"] {
        width: 12.5%
      }

      .elementor-column.elementor-col-14,
      .elementor-column[data-col="14"] {
        width: 14.285%
      }

      .elementor-column.elementor-col-16,
      .elementor-column[data-col="16"] {
        width: 16.666%
      }

      .elementor-column.elementor-col-20,
      .elementor-column[data-col="20"] {
        width: 20%
      }

      .elementor-column.elementor-col-25,
      .elementor-column[data-col="25"] {
        width: 25%
      }

      .elementor-column.elementor-col-30,
      .elementor-column[data-col="30"] {
        width: 30%
      }

      .elementor-column.elementor-col-33,
      .elementor-column[data-col="33"] {
        width: 33.333%
      }

      .elementor-column.elementor-col-40,
      .elementor-column[data-col="40"] {
        width: 40%
      }

      .elementor-column.elementor-col-50,
      .elementor-column[data-col="50"] {
        width: 50%
      }

      .elementor-column.elementor-col-60,
      .elementor-column[data-col="60"] {
        width: 60%
      }

      .elementor-column.elementor-col-66,
      .elementor-column[data-col="66"] {
        width: 66.666%
      }

      .elementor-column.elementor-col-70,
      .elementor-column[data-col="70"] {
        width: 70%
      }

      .elementor-column.elementor-col-75,
      .elementor-column[data-col="75"] {
        width: 75%
      }

      .elementor-column.elementor-col-80,
      .elementor-column[data-col="80"] {
        width: 80%
      }

      .elementor-column.elementor-col-83,
      .elementor-column[data-col="83"] {
        width: 83.333%
      }

      .elementor-column.elementor-col-90,
      .elementor-column[data-col="90"] {
        width: 90%
      }

      .elementor-column.elementor-col-100,
      .elementor-column[data-col="100"] {
        width: 100%
      }
    }

    @media (max-width:479px) {
      .elementor-column.elementor-xs-10 {
        width: 10%
      }

      .elementor-column.elementor-xs-11 {
        width: 11.111%
      }

      .elementor-column.elementor-xs-12 {
        width: 12.5%
      }

      .elementor-column.elementor-xs-14 {
        width: 14.285%
      }

      .elementor-column.elementor-xs-16 {
        width: 16.666%
      }

      .elementor-column.elementor-xs-20 {
        width: 20%
      }

      .elementor-column.elementor-xs-25 {
        width: 25%
      }

      .elementor-column.elementor-xs-30 {
        width: 30%
      }

      .elementor-column.elementor-xs-33 {
        width: 33.333%
      }

      .elementor-column.elementor-xs-40 {
        width: 40%
      }

      .elementor-column.elementor-xs-50 {
        width: 50%
      }

      .elementor-column.elementor-xs-60 {
        width: 60%
      }

      .elementor-column.elementor-xs-66 {
        width: 66.666%
      }

      .elementor-column.elementor-xs-70 {
        width: 70%
      }

      .elementor-column.elementor-xs-75 {
        width: 75%
      }

      .elementor-column.elementor-xs-80 {
        width: 80%
      }

      .elementor-column.elementor-xs-83 {
        width: 83.333%
      }

      .elementor-column.elementor-xs-90 {
        width: 90%
      }

      .elementor-column.elementor-xs-100 {
        width: 100%
      }
    }

    @media (max-width:767px) {
      .elementor-column.elementor-sm-10 {
        width: 10%
      }

      .elementor-column.elementor-sm-11 {
        width: 11.111%
      }

      .elementor-column.elementor-sm-12 {
        width: 12.5%
      }

      .elementor-column.elementor-sm-14 {
        width: 14.285%
      }

      .elementor-column.elementor-sm-16 {
        width: 16.666%
      }

      .elementor-column.elementor-sm-20 {
        width: 20%
      }

      .elementor-column.elementor-sm-25 {
        width: 25%
      }

      .elementor-column.elementor-sm-30 {
        width: 30%
      }

      .elementor-column.elementor-sm-33 {
        width: 33.333%
      }

      .elementor-column.elementor-sm-40 {
        width: 40%
      }

      .elementor-column.elementor-sm-50 {
        width: 50%
      }

      .elementor-column.elementor-sm-60 {
        width: 60%
      }

      .elementor-column.elementor-sm-66 {
        width: 66.666%
      }

      .elementor-column.elementor-sm-70 {
        width: 70%
      }

      .elementor-column.elementor-sm-75 {
        width: 75%
      }

      .elementor-column.elementor-sm-80 {
        width: 80%
      }

      .elementor-column.elementor-sm-83 {
        width: 83.333%
      }

      .elementor-column.elementor-sm-90 {
        width: 90%
      }

      .elementor-column.elementor-sm-100 {
        width: 100%
      }
    }

    @media (min-width:768px) and (max-width:1024px) {
      .elementor-column.elementor-md-10 {
        width: 10%
      }

      .elementor-column.elementor-md-11 {
        width: 11.111%
      }

      .elementor-column.elementor-md-12 {
        width: 12.5%
      }

      .elementor-column.elementor-md-14 {
        width: 14.285%
      }

      .elementor-column.elementor-md-16 {
        width: 16.666%
      }

      .elementor-column.elementor-md-20 {
        width: 20%
      }

      .elementor-column.elementor-md-25 {
        width: 25%
      }

      .elementor-column.elementor-md-30 {
        width: 30%
      }

      .elementor-column.elementor-md-33 {
        width: 33.333%
      }

      .elementor-column.elementor-md-40 {
        width: 40%
      }

      .elementor-column.elementor-md-50 {
        width: 50%
      }

      .elementor-column.elementor-md-60 {
        width: 60%
      }

      .elementor-column.elementor-md-66 {
        width: 66.666%
      }

      .elementor-column.elementor-md-70 {
        width: 70%
      }

      .elementor-column.elementor-md-75 {
        width: 75%
      }

      .elementor-column.elementor-md-80 {
        width: 80%
      }

      .elementor-column.elementor-md-83 {
        width: 83.333%
      }

      .elementor-column.elementor-md-90 {
        width: 90%
      }

      .elementor-column.elementor-md-100 {
        width: 100%
      }
    }

    @media (min-width:768px) and (max-width:1024px) {
      .elementor-reverse-tablet>.elementor-container>:first-child {
        -webkit-box-ordinal-group: 11;
        -ms-flex-order: 10;
        order: 10
      }

      .elementor-reverse-tablet>.elementor-container>:nth-child(2) {
        -webkit-box-ordinal-group: 10;
        -ms-flex-order: 9;
        order: 9
      }

      .elementor-reverse-tablet>.elementor-container>:nth-child(3) {
        -webkit-box-ordinal-group: 9;
        -ms-flex-order: 8;
        order: 8
      }

      .elementor-reverse-tablet>.elementor-container>:nth-child(4) {
        -webkit-box-ordinal-group: 8;
        -ms-flex-order: 7;
        order: 7
      }

      .elementor-reverse-tablet>.elementor-container>:nth-child(5) {
        -webkit-box-ordinal-group: 7;
        -ms-flex-order: 6;
        order: 6
      }

      .elementor-reverse-tablet>.elementor-container>:nth-child(6) {
        -webkit-box-ordinal-group: 6;
        -ms-flex-order: 5;
        order: 5
      }

      .elementor-reverse-tablet>.elementor-container>:nth-child(7) {
        -webkit-box-ordinal-group: 5;
        -ms-flex-order: 4;
        order: 4
      }

      .elementor-reverse-tablet>.elementor-container>:nth-child(8) {
        -webkit-box-ordinal-group: 4;
        -ms-flex-order: 3;
        order: 3
      }

      .elementor-reverse-tablet>.elementor-container>:nth-child(9) {
        -webkit-box-ordinal-group: 3;
        -ms-flex-order: 2;
        order: 2
      }

      .elementor-reverse-tablet>.elementor-container>:nth-child(10) {
        -webkit-box-ordinal-group: 2;
        -ms-flex-order: 1;
        order: 1
      }
    }

    @media (max-width:767px) {
      .elementor-reverse-mobile>.elementor-container>:first-child {
        -webkit-box-ordinal-group: 11;
        -ms-flex-order: 10;
        order: 10
      }

      .elementor-reverse-mobile>.elementor-container>:nth-child(2) {
        -webkit-box-ordinal-group: 10;
        -ms-flex-order: 9;
        order: 9
      }

      .elementor-reverse-mobile>.elementor-container>:nth-child(3) {
        -webkit-box-ordinal-group: 9;
        -ms-flex-order: 8;
        order: 8
      }

      .elementor-reverse-mobile>.elementor-container>:nth-child(4) {
        -webkit-box-ordinal-group: 8;
        -ms-flex-order: 7;
        order: 7
      }

      .elementor-reverse-mobile>.elementor-container>:nth-child(5) {
        -webkit-box-ordinal-group: 7;
        -ms-flex-order: 6;
        order: 6
      }

      .elementor-reverse-mobile>.elementor-container>:nth-child(6) {
        -webkit-box-ordinal-group: 6;
        -ms-flex-order: 5;
        order: 5
      }

      .elementor-reverse-mobile>.elementor-container>:nth-child(7) {
        -webkit-box-ordinal-group: 5;
        -ms-flex-order: 4;
        order: 4
      }

      .elementor-reverse-mobile>.elementor-container>:nth-child(8) {
        -webkit-box-ordinal-group: 4;
        -ms-flex-order: 3;
        order: 3
      }

      .elementor-reverse-mobile>.elementor-container>:nth-child(9) {
        -webkit-box-ordinal-group: 3;
        -ms-flex-order: 2;
        order: 2
      }

      .elementor-reverse-mobile>.elementor-container>:nth-child(10) {
        -webkit-box-ordinal-group: 2;
        -ms-flex-order: 1;
        order: 1
      }

      .elementor-column {
        width: 100%
      }
    }

    ul.elementor-icon-list-items.elementor-inline-items {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -ms-flex-wrap: wrap;
      flex-wrap: wrap
    }

    ul.elementor-icon-list-items.elementor-inline-items .elementor-inline-item {
      word-break: break-word
    }

    .elementor-grid {
      display: grid;
      grid-column-gap: var(--grid-column-gap);
      grid-row-gap: var(--grid-row-gap)
    }

    .elementor-grid .elementor-grid-item {
      min-width: 0
    }

    .elementor-grid-0 .elementor-grid {
      display: inline-block;
      width: 100%;
      word-spacing: var(--grid-column-gap);
      margin-bottom: calc(-1*var(--grid-row-gap))
    }

    .elementor-grid-0 .elementor-grid .elementor-grid-item {
      display: inline-block;
      margin-bottom: var(--grid-row-gap);
      word-break: break-word
    }

    .elementor-grid-1 .elementor-grid {
      grid-template-columns: repeat(1, 1fr)
    }

    .elementor-grid-2 .elementor-grid {
      grid-template-columns: repeat(2, 1fr)
    }

    .elementor-grid-3 .elementor-grid {
      grid-template-columns: repeat(3, 1fr)
    }

    .elementor-grid-4 .elementor-grid {
      grid-template-columns: repeat(4, 1fr)
    }

    .elementor-grid-5 .elementor-grid {
      grid-template-columns: repeat(5, 1fr)
    }

    .elementor-grid-6 .elementor-grid {
      grid-template-columns: repeat(6, 1fr)
    }

    .elementor-grid-7 .elementor-grid {
      grid-template-columns: repeat(7, 1fr)
    }

    .elementor-grid-8 .elementor-grid {
      grid-template-columns: repeat(8, 1fr)
    }

    .elementor-grid-9 .elementor-grid {
      grid-template-columns: repeat(9, 1fr)
    }

    .elementor-grid-10 .elementor-grid {
      grid-template-columns: repeat(10, 1fr)
    }

    .elementor-grid-11 .elementor-grid {
      grid-template-columns: repeat(11, 1fr)
    }

    .elementor-grid-12 .elementor-grid {
      grid-template-columns: repeat(12, 1fr)
    }

    @media (max-width:1024px) {
      .elementor-grid-tablet-0 .elementor-grid {
        display: inline-block;
        width: 100%;
        word-spacing: var(--grid-column-gap);
        margin-bottom: calc(-1*var(--grid-row-gap))
      }

      .elementor-grid-tablet-0 .elementor-grid .elementor-grid-item {
        display: inline-block;
        margin-bottom: var(--grid-row-gap);
        word-break: break-word
      }

      .elementor-grid-tablet-1 .elementor-grid {
        grid-template-columns: repeat(1, 1fr)
      }

      .elementor-grid-tablet-2 .elementor-grid {
        grid-template-columns: repeat(2, 1fr)
      }

      .elementor-grid-tablet-3 .elementor-grid {
        grid-template-columns: repeat(3, 1fr)
      }

      .elementor-grid-tablet-4 .elementor-grid {
        grid-template-columns: repeat(4, 1fr)
      }

      .elementor-grid-tablet-5 .elementor-grid {
        grid-template-columns: repeat(5, 1fr)
      }

      .elementor-grid-tablet-6 .elementor-grid {
        grid-template-columns: repeat(6, 1fr)
      }

      .elementor-grid-tablet-7 .elementor-grid {
        grid-template-columns: repeat(7, 1fr)
      }

      .elementor-grid-tablet-8 .elementor-grid {
        grid-template-columns: repeat(8, 1fr)
      }

      .elementor-grid-tablet-9 .elementor-grid {
        grid-template-columns: repeat(9, 1fr)
      }

      .elementor-grid-tablet-10 .elementor-grid {
        grid-template-columns: repeat(10, 1fr)
      }

      .elementor-grid-tablet-11 .elementor-grid {
        grid-template-columns: repeat(11, 1fr)
      }

      .elementor-grid-tablet-12 .elementor-grid {
        grid-template-columns: repeat(12, 1fr)
      }
    }

    @media (max-width:767px) {
      .elementor-grid-mobile-0 .elementor-grid {
        display: inline-block;
        width: 100%;
        word-spacing: var(--grid-column-gap);
        margin-bottom: calc(-1*var(--grid-row-gap))
      }

      .elementor-grid-mobile-0 .elementor-grid .elementor-grid-item {
        display: inline-block;
        margin-bottom: var(--grid-row-gap);
        word-break: break-word
      }

      .elementor-grid-mobile-1 .elementor-grid {
        grid-template-columns: repeat(1, 1fr)
      }

      .elementor-grid-mobile-2 .elementor-grid {
        grid-template-columns: repeat(2, 1fr)
      }

      .elementor-grid-mobile-3 .elementor-grid {
        grid-template-columns: repeat(3, 1fr)
      }

      .elementor-grid-mobile-4 .elementor-grid {
        grid-template-columns: repeat(4, 1fr)
      }

      .elementor-grid-mobile-5 .elementor-grid {
        grid-template-columns: repeat(5, 1fr)
      }

      .elementor-grid-mobile-6 .elementor-grid {
        grid-template-columns: repeat(6, 1fr)
      }

      .elementor-grid-mobile-7 .elementor-grid {
        grid-template-columns: repeat(7, 1fr)
      }

      .elementor-grid-mobile-8 .elementor-grid {
        grid-template-columns: repeat(8, 1fr)
      }

      .elementor-grid-mobile-9 .elementor-grid {
        grid-template-columns: repeat(9, 1fr)
      }

      .elementor-grid-mobile-10 .elementor-grid {
        grid-template-columns: repeat(10, 1fr)
      }

      .elementor-grid-mobile-11 .elementor-grid {
        grid-template-columns: repeat(11, 1fr)
      }

      .elementor-grid-mobile-12 .elementor-grid {
        grid-template-columns: repeat(12, 1fr)
      }
    }

    @media (min-width:1025px) {
      #elementor-device-mode:after {
        content: "desktop"
      }
    }

    @media (min-width:768px) and (max-width:1024px) {
      #elementor-device-mode:after {
        content: "tablet"
      }
    }

    @media (max-width:767px) {
      #elementor-device-mode:after {
        content: "mobile"
      }
    }

    .elementor-form-fields-wrapper {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -ms-flex-wrap: wrap;
      flex-wrap: wrap
    }

    .elementor-form-fields-wrapper.elementor-labels-above .elementor-field-group .elementor-field-subgroup,
    .elementor-form-fields-wrapper.elementor-labels-above .elementor-field-group>.elementor-select-wrapper,
    .elementor-form-fields-wrapper.elementor-labels-above .elementor-field-group>input,
    .elementor-form-fields-wrapper.elementor-labels-above .elementor-field-group>textarea {
      -ms-flex-preferred-size: 100%;
      flex-basis: 100%;
      max-width: 100%
    }

    .elementor-form-fields-wrapper.elementor-labels-inline>.elementor-field-group .elementor-select-wrapper,
    .elementor-form-fields-wrapper.elementor-labels-inline>.elementor-field-group>input {
      -webkit-box-flex: 1;
      -ms-flex-positive: 1;
      flex-grow: 1
    }

    .elementor-field-group {
      -ms-flex-wrap: wrap;
      flex-wrap: wrap;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center
    }

    .elementor-field-group.elementor-field-type-submit {
      -webkit-box-align: end;
      -ms-flex-align: end;
      align-items: flex-end
    }

    .elementor-field-group .elementor-field-textual {
      width: 100%;
      max-width: 100%;
      border: 1px solid #818a91;
      background-color: transparent;
      color: #373a3c;
      vertical-align: middle;
      -webkit-box-flex: 1;
      -ms-flex-positive: 1;
      flex-grow: 1
    }

    .elementor-field-group .elementor-field-textual:focus {
      -webkit-box-shadow: 0 0 0 1px rgba(0, 0, 0, .1) inset;
      box-shadow: inset 0 0 0 1px rgba(0, 0, 0, .1);
      outline: 0
    }

    .elementor-field-group .elementor-field-textual::-webkit-input-placeholder {
      color: inherit;
      font-family: inherit;
      opacity: .6
    }

    .elementor-field-group .elementor-field-textual:-ms-input-placeholder {
      color: inherit;
      font-family: inherit;
      opacity: .6
    }

    .elementor-field-group .elementor-field-textual:-moz-placeholder,
    .elementor-field-group .elementor-field-textual::-moz-placeholder {
      color: inherit;
      font-family: inherit;
      opacity: .6
    }

    .elementor-field-group .elementor-field-textual::-ms-input-placeholder {
      color: inherit;
      font-family: inherit;
      opacity: .6
    }

    .elementor-field-group .elementor-field-textual::placeholder {
      color: inherit;
      font-family: inherit;
      opacity: .6
    }

    .elementor-field-group .elementor-select-wrapper {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      position: relative;
      width: 100%
    }

    .elementor-field-group .elementor-select-wrapper select {
      appearance: none;
      -webkit-appearance: none;
      -moz-appearance: none;
      color: inherit;
      font-size: inherit;
      font-family: inherit;
      font-weight: inherit;
      font-style: inherit;
      text-transform: inherit;
      letter-spacing: inherit;
      line-height: inherit;
      -ms-flex-preferred-size: 100%;
      flex-basis: 100%;
      padding-right: 20px
    }

    .elementor-field-group .elementor-select-wrapper:before {
      content: "\e92a";
      font-family: eicons;
      font-size: 15px;
      position: absolute;
      top: 50%;
      -webkit-transform: translateY(-50%);
      -ms-transform: translateY(-50%);
      transform: translateY(-50%);
      right: 10px;
      pointer-events: none;
      text-shadow: 0 0 3px rgba(0, 0, 0, .3)
    }

    .elementor-field-group.elementor-field-type-select-multiple .elementor-select-wrapper:before {
      content: ""
    }

    .elementor-field-subgroup {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -ms-flex-wrap: wrap;
      flex-wrap: wrap
    }

    .elementor-field-subgroup .elementor-field-option label {
      display: inline-block
    }

    .elementor-field-subgroup.elementor-subgroup-inline .elementor-field-option {
      padding-right: 10px
    }

    .elementor-field-subgroup:not(.elementor-subgroup-inline) .elementor-field-option {
      -ms-flex-preferred-size: 100%;
      flex-basis: 100%
    }

    .elementor-field-type-acceptance .elementor-field-subgroup .elementor-field-option input,
    .elementor-field-type-acceptance .elementor-field-subgroup .elementor-field-option label,
    .elementor-field-type-checkbox .elementor-field-subgroup .elementor-field-option input,
    .elementor-field-type-checkbox .elementor-field-subgroup .elementor-field-option label,
    .elementor-field-type-radio .elementor-field-subgroup .elementor-field-option input,
    .elementor-field-type-radio .elementor-field-subgroup .elementor-field-option label {
      display: inline
    }

    .elementor-field-label {
      cursor: pointer
    }

    .elementor-mark-required .elementor-field-label:after {
      content: "*";
      color: red;
      padding-left: .2em
    }

    .elementor-field-textual {
      line-height: 1.4;
      font-size: 15px;
      min-height: 40px;
      padding: 5px 14px;
      -webkit-border-radius: 3px;
      border-radius: 3px
    }

    .elementor-field-textual.elementor-size-xs {
      font-size: 13px;
      min-height: 33px;
      padding: 4px 12px;
      -webkit-border-radius: 2px;
      border-radius: 2px
    }

    .elementor-field-textual.elementor-size-md {
      font-size: 16px;
      min-height: 47px;
      padding: 6px 16px;
      -webkit-border-radius: 4px;
      border-radius: 4px
    }

    .elementor-field-textual.elementor-size-lg {
      font-size: 18px;
      min-height: 59px;
      padding: 7px 20px;
      -webkit-border-radius: 5px;
      border-radius: 5px
    }

    .elementor-field-textual.elementor-size-xl {
      font-size: 20px;
      min-height: 72px;
      padding: 8px 24px;
      -webkit-border-radius: 6px;
      border-radius: 6px
    }

    .elementor-button-align-stretch .elementor-field-type-submit:not(.e-form__buttons__wrapper) .elementor-button {
      -ms-flex-preferred-size: 100%;
      flex-basis: 100%
    }

    .elementor-button-align-stretch .e-form__buttons__wrapper {
      -ms-flex-preferred-size: 50%;
      flex-basis: 50%;
      -webkit-box-flex: 1;
      -ms-flex-positive: 1;
      flex-grow: 1
    }

    .elementor-button-align-stretch .e-form__buttons__wrapper__button {
      -ms-flex-preferred-size: 100%;
      flex-basis: 100%
    }

    .elementor-button-align-center .e-form__buttons,
    .elementor-button-align-center .elementor-field-type-submit {
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center
    }

    .elementor-button-align-start .e-form__buttons,
    .elementor-button-align-start .elementor-field-type-submit {
      -webkit-box-pack: start;
      -ms-flex-pack: start;
      justify-content: flex-start
    }

    .elementor-button-align-end .e-form__buttons,
    .elementor-button-align-end .elementor-field-type-submit {
      -webkit-box-pack: end;
      -ms-flex-pack: end;
      justify-content: flex-end
    }

    .elementor-button-align-center .elementor-field-type-submit:not(.e-form__buttons__wrapper) .elementor-button,
    .elementor-button-align-end .elementor-field-type-submit:not(.e-form__buttons__wrapper) .elementor-button,
    .elementor-button-align-start .elementor-field-type-submit:not(.e-form__buttons__wrapper) .elementor-button {
      -ms-flex-preferred-size: initial;
      flex-basis: auto
    }

    .elementor-button-align-center .e-form__buttons__wrapper,
    .elementor-button-align-end .e-form__buttons__wrapper,
    .elementor-button-align-start .e-form__buttons__wrapper {
      -webkit-box-flex: initial;
      -ms-flex-positive: initial;
      flex-grow: 0
    }

    .elementor-button-align-center .e-form__buttons__wrapper,
    .elementor-button-align-center .e-form__buttons__wrapper__button,
    .elementor-button-align-end .e-form__buttons__wrapper,
    .elementor-button-align-end .e-form__buttons__wrapper__button,
    .elementor-button-align-start .e-form__buttons__wrapper,
    .elementor-button-align-start .e-form__buttons__wrapper__button {
      -ms-flex-preferred-size: initial;
      flex-basis: auto
    }

    @media screen and (max-width:1024px) {
      .elementor-tablet-button-align-stretch .elementor-field-type-submit:not(.e-form__buttons__wrapper) .elementor-button {
        -ms-flex-preferred-size: 100%;
        flex-basis: 100%
      }

      .elementor-tablet-button-align-stretch .e-form__buttons__wrapper {
        -ms-flex-preferred-size: 50%;
        flex-basis: 50%;
        -webkit-box-flex: 1;
        -ms-flex-positive: 1;
        flex-grow: 1
      }

      .elementor-tablet-button-align-stretch .e-form__buttons__wrapper__button {
        -ms-flex-preferred-size: 100%;
        flex-basis: 100%
      }

      .elementor-tablet-button-align-center .e-form__buttons,
      .elementor-tablet-button-align-center .elementor-field-type-submit {
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center
      }

      .elementor-tablet-button-align-start .e-form__buttons,
      .elementor-tablet-button-align-start .elementor-field-type-submit {
        -webkit-box-pack: start;
        -ms-flex-pack: start;
        justify-content: flex-start
      }

      .elementor-tablet-button-align-end .e-form__buttons,
      .elementor-tablet-button-align-end .elementor-field-type-submit {
        -webkit-box-pack: end;
        -ms-flex-pack: end;
        justify-content: flex-end
      }

      .elementor-tablet-button-align-center .elementor-field-type-submit:not(.e-form__buttons__wrapper) .elementor-button,
      .elementor-tablet-button-align-end .elementor-field-type-submit:not(.e-form__buttons__wrapper) .elementor-button,
      .elementor-tablet-button-align-start .elementor-field-type-submit:not(.e-form__buttons__wrapper) .elementor-button {
        -ms-flex-preferred-size: initial;
        flex-basis: auto
      }

      .elementor-tablet-button-align-center .e-form__buttons__wrapper,
      .elementor-tablet-button-align-end .e-form__buttons__wrapper,
      .elementor-tablet-button-align-start .e-form__buttons__wrapper {
        -webkit-box-flex: initial;
        -ms-flex-positive: initial;
        flex-grow: 0
      }

      .elementor-tablet-button-align-center .e-form__buttons__wrapper,
      .elementor-tablet-button-align-center .e-form__buttons__wrapper__button,
      .elementor-tablet-button-align-end .e-form__buttons__wrapper,
      .elementor-tablet-button-align-end .e-form__buttons__wrapper__button,
      .elementor-tablet-button-align-start .e-form__buttons__wrapper,
      .elementor-tablet-button-align-start .e-form__buttons__wrapper__button {
        -ms-flex-preferred-size: initial;
        flex-basis: auto
      }
    }

    @media screen and (max-width:767px) {
      .elementor-mobile-button-align-stretch .elementor-field-type-submit:not(.e-form__buttons__wrapper) .elementor-button {
        -ms-flex-preferred-size: 100%;
        flex-basis: 100%
      }

      .elementor-mobile-button-align-stretch .e-form__buttons__wrapper {
        -ms-flex-preferred-size: 50%;
        flex-basis: 50%;
        -webkit-box-flex: 1;
        -ms-flex-positive: 1;
        flex-grow: 1
      }

      .elementor-mobile-button-align-stretch .e-form__buttons__wrapper__button {
        -ms-flex-preferred-size: 100%;
        flex-basis: 100%
      }

      .elementor-mobile-button-align-center .e-form__buttons,
      .elementor-mobile-button-align-center .elementor-field-type-submit {
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center
      }

      .elementor-mobile-button-align-start .e-form__buttons,
      .elementor-mobile-button-align-start .elementor-field-type-submit {
        -webkit-box-pack: start;
        -ms-flex-pack: start;
        justify-content: flex-start
      }

      .elementor-mobile-button-align-end .e-form__buttons,
      .elementor-mobile-button-align-end .elementor-field-type-submit {
        -webkit-box-pack: end;
        -ms-flex-pack: end;
        justify-content: flex-end
      }

      .elementor-mobile-button-align-center .elementor-field-type-submit:not(.e-form__buttons__wrapper) .elementor-button,
      .elementor-mobile-button-align-end .elementor-field-type-submit:not(.e-form__buttons__wrapper) .elementor-button,
      .elementor-mobile-button-align-start .elementor-field-type-submit:not(.e-form__buttons__wrapper) .elementor-button {
        -ms-flex-preferred-size: initial;
        flex-basis: auto
      }

      .elementor-mobile-button-align-center .e-form__buttons__wrapper,
      .elementor-mobile-button-align-end .e-form__buttons__wrapper,
      .elementor-mobile-button-align-start .e-form__buttons__wrapper {
        -webkit-box-flex: initial;
        -ms-flex-positive: initial;
        flex-grow: 0
      }

      .elementor-mobile-button-align-center .e-form__buttons__wrapper,
      .elementor-mobile-button-align-center .e-form__buttons__wrapper__button,
      .elementor-mobile-button-align-end .e-form__buttons__wrapper,
      .elementor-mobile-button-align-end .e-form__buttons__wrapper__button,
      .elementor-mobile-button-align-start .e-form__buttons__wrapper,
      .elementor-mobile-button-align-start .e-form__buttons__wrapper__button {
        -ms-flex-preferred-size: initial;
        flex-basis: auto
      }
    }

    .elementor-error .elementor-field {
      border-color: #d9534f
    }

    .elementor-error .help-inline {
      color: #d9534f;
      font-size: .9em
    }

    .elementor-message {
      margin: 10px 0;
      font-size: 1em;
      line-height: 1
    }

    .elementor-message:before {
      content: "\e90e";
      display: inline-block;
      font-family: eicons;
      font-weight: 400;
      font-style: normal;
      vertical-align: middle;
      margin-right: 5px
    }

    .elementor-message.elementor-message-danger {
      color: #d9534f
    }

    .elementor-message.elementor-message-danger:before {
      content: "\e87f"
    }

    .elementor-message.form-message-success {
      color: #5cb85c
    }

    .elementor-form .elementor-button {
      padding-top: 0;
      padding-bottom: 0;
      border: none
    }

    .elementor-form .elementor-button>span {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center
    }

    .elementor-form .elementor-button.elementor-size-xs {
      min-height: 33px
    }

    .elementor-form .elementor-button.elementor-size-sm {
      min-height: 40px
    }

    .elementor-form .elementor-button.elementor-size-md {
      min-height: 47px
    }

    .elementor-form .elementor-button.elementor-size-lg {
      min-height: 59px
    }

    .elementor-form .elementor-button.elementor-size-xl {
      min-height: 72px
    }

    .elementor-element .elementor-widget-container {
      -webkit-transition: background .3s, border .3s, -webkit-border-radius .3s, -webkit-box-shadow .3s;
      transition: background .3s, border .3s, -webkit-border-radius .3s, -webkit-box-shadow .3s;
      -o-transition: background .3s, border .3s, border-radius .3s, box-shadow .3s;
      transition: background .3s, border .3s, border-radius .3s, box-shadow .3s;
      transition: background .3s, border .3s, border-radius .3s, box-shadow .3s, -webkit-border-radius .3s, -webkit-box-shadow .3s
    }

    .elementor-accordion {
      text-align: left
    }

    .elementor-accordion .elementor-accordion-item {
      border: 1px solid #d4d4d4
    }

    .elementor-accordion .elementor-accordion-item+.elementor-accordion-item {
      border-top: none
    }

    .elementor-accordion .elementor-tab-title {
      margin: 0;
      padding: 15px 20px;
      font-weight: 700;
      line-height: 1;
      cursor: pointer;
      outline: none
    }

    .elementor-accordion .elementor-tab-title .elementor-accordion-icon {
      display: inline-block;
      width: 1.5em
    }

    .elementor-accordion .elementor-tab-title .elementor-accordion-icon.elementor-accordion-icon-right {
      float: right;
      text-align: right
    }

    .elementor-accordion .elementor-tab-title .elementor-accordion-icon.elementor-accordion-icon-left {
      float: left;
      text-align: left
    }

    .elementor-accordion .elementor-tab-title .elementor-accordion-icon .elementor-accordion-icon-closed {
      display: block
    }

    .elementor-accordion .elementor-tab-title .elementor-accordion-icon .elementor-accordion-icon-opened,
    .elementor-accordion .elementor-tab-title.elementor-active .elementor-accordion-icon-closed {
      display: none
    }

    .elementor-accordion .elementor-tab-title.elementor-active .elementor-accordion-icon-opened {
      display: block
    }

    .elementor-accordion .elementor-tab-content {
      display: none;
      padding: 15px 20px;
      border-top: 1px solid #d4d4d4
    }

    @media (max-width:767px) {
      .elementor-accordion .elementor-tab-title {
        padding: 12px 15px
      }

      .elementor-accordion .elementor-tab-title .elementor-accordion-icon {
        width: 1.2em
      }

      .elementor-accordion .elementor-tab-content {
        padding: 7px 15px
      }
    }

    .elementor-alert {
      padding: 15px;
      border-left: 5px solid transparent;
      position: relative;
      text-align: left
    }

    .elementor-alert .elementor-alert-title {
      display: block;
      font-weight: 700
    }

    .elementor-alert .elementor-alert-description {
      font-size: 13px
    }

    .elementor-alert button.elementor-alert-dismiss {
      position: absolute;
      right: 10px;
      top: 10px;
      padding: 3px;
      font-size: 20px;
      line-height: 1;
      background: transparent;
      color: inherit;
      border: none;
      cursor: pointer
    }

    .elementor-alert.elementor-alert-info {
      color: #31708f;
      background-color: #d9edf7;
      border-color: #bcdff1
    }

    .elementor-alert.elementor-alert-success {
      color: #3c763d;
      background-color: #dff0d8;
      border-color: #cae6be
    }

    .elementor-alert.elementor-alert-warning {
      color: #8a6d3b;
      background-color: #fcf8e3;
      border-color: #f9f0c3
    }

    .elementor-alert.elementor-alert-danger {
      color: #a94442;
      background-color: #f2dede;
      border-color: #e8c4c4
    }

    @media (max-width:767px) {
      .elementor-alert {
        padding: 10px
      }

      .elementor-alert button.elementor-alert-dismiss {
        right: 7px;
        top: 7px
      }
    }

    .elementor-tab-title a {
      color: inherit
    }

    .elementor-button {
      display: inline-block;
      line-height: 1;
      background-color: #818a91;
      font-size: 15px;
      padding: 12px 24px;
      -webkit-border-radius: 3px;
      border-radius: 3px;
      color: #fff;
      fill: #fff;
      text-align: center;
      -webkit-transition: all .3s;
      -o-transition: all .3s;
      transition: all .3s
    }

    .elementor-button:focus,
    .elementor-button:hover,
    .elementor-button:visited {
      color: #fff
    }

    .elementor-button-content-wrapper {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center
    }

    .elementor-button-icon {
      -webkit-box-flex: 0;
      -ms-flex-positive: 0;
      flex-grow: 0;
      -webkit-box-ordinal-group: 6;
      -ms-flex-order: 5;
      order: 5
    }

    .elementor-button-icon svg {
      width: 1em
    }

    .elementor-button-text {
      -webkit-box-flex: 1;
      -ms-flex-positive: 1;
      flex-grow: 1;
      -webkit-box-ordinal-group: 11;
      -ms-flex-order: 10;
      order: 10;
      display: inline-block
    }

    .elementor-button.elementor-size-xs {
      font-size: 13px;
      padding: 10px 20px;
      -webkit-border-radius: 2px;
      border-radius: 2px
    }

    .elementor-button.elementor-size-md {
      font-size: 16px;
      padding: 15px 30px;
      -webkit-border-radius: 4px;
      border-radius: 4px
    }

    .elementor-button.elementor-size-lg {
      font-size: 18px;
      padding: 20px 40px;
      -webkit-border-radius: 5px;
      border-radius: 5px
    }

    .elementor-button.elementor-size-xl {
      font-size: 20px;
      padding: 25px 50px;
      -webkit-border-radius: 6px;
      border-radius: 6px
    }

    .elementor-button .elementor-align-icon-right {
      margin-left: 5px;
      -webkit-box-ordinal-group: 16;
      -ms-flex-order: 15;
      order: 15
    }

    .elementor-button .elementor-align-icon-left {
      margin-right: 5px;
      -webkit-box-ordinal-group: 6;
      -ms-flex-order: 5;
      order: 5
    }

    .elementor-button span {
      text-decoration: inherit
    }

    .elementor-menu-cart__toggle .elementor-button-icon {
      -webkit-box-ordinal-group: 16;
      -ms-flex-order: 15;
      order: 15
    }

    .elementor-element.elementor-button-info .elementor-button {
      background-color: #5bc0de
    }

    .elementor-element.elementor-button-success .elementor-button {
      background-color: #5cb85c
    }

    .elementor-element.elementor-button-warning .elementor-button {
      background-color: #f0ad4e
    }

    .elementor-element.elementor-button-danger .elementor-button {
      background-color: #d9534f
    }

    .elementor-widget-button .elementor-button .elementor-button-info {
      background-color: #5bc0de
    }

    .elementor-widget-button .elementor-button .elementor-button-success {
      background-color: #5cb85c
    }

    .elementor-widget-button .elementor-button .elementor-button-warning {
      background-color: #f0ad4e
    }

    .elementor-widget-button .elementor-button .elementor-button-danger {
      background-color: #d9534f
    }

    .elementor-counter .elementor-counter-number-wrapper {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      font-size: 69px;
      font-weight: 600;
      color: #222;
      line-height: 1
    }

    .elementor-counter .elementor-counter-number-prefix,
    .elementor-counter .elementor-counter-number-suffix {
      -webkit-box-flex: 1;
      -ms-flex-positive: 1;
      flex-grow: 1;
      white-space: pre-wrap
    }

    .elementor-counter .elementor-counter-number-prefix {
      text-align: right
    }

    .elementor-counter .elementor-counter-number-suffix {
      text-align: left
    }

    .elementor-counter .elementor-counter-title {
      text-align: center;
      font-size: 19px;
      font-weight: 400;
      color: #666;
      line-height: 2.5
    }

    .elementor-widget-divider {
      --divider-border-style: none;
      --divider-border-width: 1px;
      --divider-color: #2c2c2c;
      --divider-icon-size: 20px;
      --divider-element-spacing: 10px;
      --divider-pattern-height: 24px;
      --divider-pattern-size: 20px;
      --divider-pattern-url: none;
      --divider-pattern-repeat: repeat-x
    }

    .elementor-widget-divider .elementor-divider {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex
    }

    .elementor-widget-divider .elementor-divider__text {
      font-size: 15px;
      line-height: 1;
      max-width: 95%
    }

    .elementor-widget-divider .elementor-divider__element {
      margin: 0 var(--divider-element-spacing);
      -ms-flex-negative: 0;
      flex-shrink: 0
    }

    .elementor-widget-divider .elementor-icon {
      font-size: var(--divider-icon-size)
    }

    .elementor-widget-divider .elementor-divider-separator {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      margin: 0;
      direction: ltr
    }

    .elementor-widget-divider--view-line_icon .elementor-divider-separator,
    .elementor-widget-divider--view-line_text .elementor-divider-separator {
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center
    }

    .elementor-widget-divider--view-line_icon .elementor-divider-separator:after,
    .elementor-widget-divider--view-line_icon .elementor-divider-separator:before,
    .elementor-widget-divider--view-line_text .elementor-divider-separator:after,
    .elementor-widget-divider--view-line_text .elementor-divider-separator:before {
      display: block;
      content: "";
      border-bottom: 0;
      -webkit-box-flex: 1;
      -ms-flex-positive: 1;
      flex-grow: 1;
      border-top: var(--divider-border-width) var(--divider-border-style) var(--divider-color)
    }

    .elementor-widget-divider--element-align-left .elementor-divider .elementor-divider-separator>.elementor-divider__svg:first-of-type {
      -webkit-box-flex: 0;
      -ms-flex-positive: 0;
      flex-grow: 0;
      -ms-flex-negative: 100;
      flex-shrink: 100
    }

    .elementor-widget-divider--element-align-left .elementor-divider-separator:before {
      content: none
    }

    .elementor-widget-divider--element-align-left .elementor-divider__element {
      margin-left: 0
    }

    .elementor-widget-divider--element-align-right .elementor-divider .elementor-divider-separator>.elementor-divider__svg:last-of-type {
      -webkit-box-flex: 0;
      -ms-flex-positive: 0;
      flex-grow: 0;
      -ms-flex-negative: 100;
      flex-shrink: 100
    }

    .elementor-widget-divider--element-align-right .elementor-divider-separator:after {
      content: none
    }

    .elementor-widget-divider--element-align-right .elementor-divider__element {
      margin-right: 0
    }

    .elementor-widget-divider:not(.elementor-widget-divider--view-line_text):not(.elementor-widget-divider--view-line_icon) .elementor-divider-separator {
      border-top: var(--divider-border-width) var(--divider-border-style) var(--divider-color)
    }

    .elementor-widget-divider--separator-type-pattern {
      --divider-border-style: none
    }

    .elementor-widget-divider--separator-type-pattern.elementor-widget-divider--view-line .elementor-divider-separator,
    .elementor-widget-divider--separator-type-pattern:not(.elementor-widget-divider--view-line) .elementor-divider-separator:after,
    .elementor-widget-divider--separator-type-pattern:not(.elementor-widget-divider--view-line) .elementor-divider-separator:before,
    .elementor-widget-divider--separator-type-pattern:not([class*=elementor-widget-divider--view]) .elementor-divider-separator {
      width: 100%;
      min-height: var(--divider-pattern-height);
      -webkit-mask-size: var(--divider-pattern-size) 100%;
      mask-size: var(--divider-pattern-size) 100%;
      -webkit-mask-repeat: var(--divider-pattern-repeat);
      mask-repeat: var(--divider-pattern-repeat);
      background-color: var(--divider-color);
      -webkit-mask-image: var(--divider-pattern-url);
      mask-image: var(--divider-pattern-url)
    }

    .elementor-widget-divider--no-spacing {
      --divider-pattern-size: auto
    }

    .elementor-widget-divider--bg-round {
      --divider-pattern-repeat: round
    }

    .rtl .elementor-widget-divider .elementor-divider__text {
      direction: rtl
    }

    .elementor-image-gallery .gallery-item {
      display: inline-block;
      text-align: center;
      vertical-align: top;
      width: 100%;
      max-width: 100%;
      margin: 0 auto
    }

    .elementor-image-gallery .gallery-item img {
      margin: 0 auto
    }

    .elementor-image-gallery .gallery-item .gallery-caption {
      margin: 0
    }

    @media (min-width:768px) {
      .elementor-image-gallery .gallery-columns-2 .gallery-item {
        max-width: 50%
      }

      .elementor-image-gallery .gallery-columns-3 .gallery-item {
        max-width: 33.33%
      }

      .elementor-image-gallery .gallery-columns-4 .gallery-item {
        max-width: 25%
      }

      .elementor-image-gallery .gallery-columns-5 .gallery-item {
        max-width: 20%
      }

      .elementor-image-gallery .gallery-columns-6 .gallery-item {
        max-width: 16.666%
      }

      .elementor-image-gallery .gallery-columns-7 .gallery-item {
        max-width: 14.28%
      }

      .elementor-image-gallery .gallery-columns-8 .gallery-item {
        max-width: 12.5%
      }

      .elementor-image-gallery .gallery-columns-9 .gallery-item {
        max-width: 11.11%
      }

      .elementor-image-gallery .gallery-columns-10 .gallery-item {
        max-width: 10%
      }
    }

    @media (min-width:480px) and (max-width:767px) {

      .elementor-image-gallery .gallery.gallery-columns-2 .gallery-item,
      .elementor-image-gallery .gallery.gallery-columns-3 .gallery-item,
      .elementor-image-gallery .gallery.gallery-columns-4 .gallery-item,
      .elementor-image-gallery .gallery.gallery-columns-5 .gallery-item,
      .elementor-image-gallery .gallery.gallery-columns-6 .gallery-item,
      .elementor-image-gallery .gallery.gallery-columns-7 .gallery-item,
      .elementor-image-gallery .gallery.gallery-columns-8 .gallery-item,
      .elementor-image-gallery .gallery.gallery-columns-9 .gallery-item,
      .elementor-image-gallery .gallery.gallery-columns-10 .gallery-item {
        max-width: 50%
      }
    }

    @media (max-width:479px) {

      .elementor-image-gallery .gallery.gallery-columns-2 .gallery-item,
      .elementor-image-gallery .gallery.gallery-columns-3 .gallery-item,
      .elementor-image-gallery .gallery.gallery-columns-4 .gallery-item,
      .elementor-image-gallery .gallery.gallery-columns-5 .gallery-item,
      .elementor-image-gallery .gallery.gallery-columns-6 .gallery-item,
      .elementor-image-gallery .gallery.gallery-columns-7 .gallery-item,
      .elementor-image-gallery .gallery.gallery-columns-8 .gallery-item,
      .elementor-image-gallery .gallery.gallery-columns-9 .gallery-item,
      .elementor-image-gallery .gallery.gallery-columns-10 .gallery-item {
        max-width: 100%
      }
    }

    .elementor-widget-google_maps iframe {
      height: 300px
    }

    .elementor-heading-title {
      padding: 0;
      margin: 0;
      line-height: 1
    }

    .elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a {
      color: inherit;
      font-size: inherit;
      line-height: inherit
    }

    .elementor-widget-heading .elementor-heading-title.elementor-size-small {
      font-size: 15px
    }

    .elementor-widget-heading .elementor-heading-title.elementor-size-medium {
      font-size: 19px
    }

    .elementor-widget-heading .elementor-heading-title.elementor-size-large {
      font-size: 29px
    }

    .elementor-widget-heading .elementor-heading-title.elementor-size-xl {
      font-size: 39px
    }

    .elementor-widget-heading .elementor-heading-title.elementor-size-xxl {
      font-size: 59px
    }

    .elementor-icon {
      display: inline-block;
      line-height: 1;
      -webkit-transition: all .3s;
      -o-transition: all .3s;
      transition: all .3s;
      color: #818a91;
      font-size: 50px;
      text-align: center
    }

    .elementor-icon:hover {
      color: #818a91
    }

    .elementor-icon i,
    .elementor-icon svg {
      width: 1em;
      height: 1em;
      position: relative;
      display: block
    }

    .elementor-icon i:before,
    .elementor-icon svg:before {
      position: absolute;
      left: 50%;
      -webkit-transform: translateX(-50%);
      -ms-transform: translateX(-50%);
      transform: translateX(-50%)
    }

    .elementor-icon i.fad {
      width: auto
    }

    .elementor-view-stacked .elementor-icon {
      padding: .5em;
      background-color: #818a91;
      color: #fff;
      fill: #fff
    }

    .elementor-view-framed .elementor-icon {
      padding: .5em;
      color: #818a91;
      border: 3px solid #818a91;
      background-color: transparent
    }

    .elementor-shape-circle .elementor-icon {
      -webkit-border-radius: 50%;
      border-radius: 50%
    }

    @media (min-width:768px) {

      .elementor-widget-icon-box.elementor-position-left .elementor-icon-box-wrapper,
      .elementor-widget-icon-box.elementor-position-right .elementor-icon-box-wrapper {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex
      }

      .elementor-widget-icon-box.elementor-position-left .elementor-icon-box-icon,
      .elementor-widget-icon-box.elementor-position-right .elementor-icon-box-icon {
        display: -webkit-inline-box;
        display: -ms-inline-flexbox;
        display: inline-flex;
        -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
        flex: 0 0 auto
      }

      .elementor-widget-icon-box.elementor-position-right .elementor-icon-box-wrapper {
        text-align: right;
        -webkit-box-orient: horizontal;
        -webkit-box-direction: reverse;
        -ms-flex-direction: row-reverse;
        flex-direction: row-reverse
      }

      .elementor-widget-icon-box.elementor-position-left .elementor-icon-box-wrapper {
        text-align: left;
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -ms-flex-direction: row;
        flex-direction: row
      }

      .elementor-widget-icon-box.elementor-position-top .elementor-icon-box-img {
        margin: auto
      }

      .elementor-widget-icon-box.elementor-vertical-align-top .elementor-icon-box-wrapper {
        -webkit-box-align: start;
        -ms-flex-align: start;
        align-items: flex-start
      }

      .elementor-widget-icon-box.elementor-vertical-align-middle .elementor-icon-box-wrapper {
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center
      }

      .elementor-widget-icon-box.elementor-vertical-align-bottom .elementor-icon-box-wrapper {
        -webkit-box-align: end;
        -ms-flex-align: end;
        align-items: flex-end
      }
    }

    @media (max-width:767px) {
      .elementor-widget-icon-box .elementor-icon-box-icon {
        margin-left: auto !important;
        margin-right: auto !important;
        margin-bottom: 15px
      }
    }

    .elementor-widget-icon-box .elementor-icon-box-wrapper {
      text-align: center
    }

    .elementor-widget-icon-box .elementor-icon-box-title a {
      color: inherit
    }

    .elementor-widget-icon-box .elementor-icon-box-content {
      -webkit-box-flex: 1;
      -ms-flex-positive: 1;
      flex-grow: 1
    }

    .elementor-widget-icon-box .elementor-icon-box-description {
      margin: 0
    }

    .elementor-widget.elementor-icon-list--layout-inline .elementor-widget-container {
      overflow: hidden
    }

    .elementor-widget .elementor-icon-list-items.elementor-inline-items {
      margin-right: -8px;
      margin-left: -8px
    }

    .elementor-widget .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item {
      margin-right: 8px;
      margin-left: 8px
    }

    .elementor-widget .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after {
      width: auto;
      left: auto;
      right: auto;
      position: relative;
      height: 100%;
      top: 50%;
      -webkit-transform: translateY(-50%);
      -ms-transform: translateY(-50%);
      transform: translateY(-50%);
      border-top: 0;
      border-bottom: 0;
      border-right: 0;
      border-left-width: 1px;
      border-style: solid;
      right: -8px
    }

    .elementor-widget .elementor-icon-list-items {
      list-style-type: none;
      margin: 0;
      padding: 0
    }

    .elementor-widget .elementor-icon-list-item {
      margin: 0;
      padding: 0;
      position: relative
    }

    .elementor-widget .elementor-icon-list-item:after {
      position: absolute;
      bottom: 0;
      width: 100%
    }

    .elementor-widget .elementor-icon-list-item,
    .elementor-widget .elementor-icon-list-item a {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-align: start;
      -ms-flex-align: start;
      align-items: flex-start
    }

    .elementor-widget .elementor-icon-list-icon+.elementor-icon-list-text {
      -ms-flex-item-align: center;
      align-self: center;
      padding-left: 5px
    }

    .elementor-widget .elementor-icon-list-icon {
      -ms-flex-negative: 0;
      flex-shrink: 0
    }

    .elementor-widget .elementor-icon-list-icon i {
      width: 1.25em
    }

    .elementor-widget .elementor-icon-list-icon svg {
      width: 1em
    }

    .elementor-widget.elementor-list-item-link-full_width a {
      width: 100%
    }

    .elementor-widget.elementor-align-center .elementor-icon-list-item,
    .elementor-widget.elementor-align-center .elementor-icon-list-item a {
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center
    }

    .elementor-widget.elementor-align-center .elementor-icon-list-item:after {
      margin: auto
    }

    .elementor-widget.elementor-align-center .elementor-inline-items {
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center
    }

    .elementor-widget.elementor-align-left .elementor-icon-list-item,
    .elementor-widget.elementor-align-left .elementor-icon-list-item a {
      -webkit-box-pack: start;
      -ms-flex-pack: start;
      justify-content: flex-start;
      text-align: left
    }

    .elementor-widget.elementor-align-left .elementor-inline-items {
      -webkit-box-pack: start;
      -ms-flex-pack: start;
      justify-content: flex-start
    }

    .elementor-widget.elementor-align-right .elementor-icon-list-item,
    .elementor-widget.elementor-align-right .elementor-icon-list-item a {
      -webkit-box-pack: end;
      -ms-flex-pack: end;
      justify-content: flex-end;
      text-align: right
    }

    .elementor-widget.elementor-align-right .elementor-icon-list-items {
      -webkit-box-pack: end;
      -ms-flex-pack: end;
      justify-content: flex-end
    }

    .elementor-widget:not(.elementor-align-right) .elementor-icon-list-item:after {
      left: 0
    }

    .elementor-widget:not(.elementor-align-left) .elementor-icon-list-item:after {
      right: 0
    }

    @media (max-width:1024px) {

      .elementor-widget.elementor-tablet-align-center .elementor-icon-list-item,
      .elementor-widget.elementor-tablet-align-center .elementor-icon-list-item a,
      .elementor-widget.elementor-tablet-align-center .elementor-icon-list-items {
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center
      }

      .elementor-widget.elementor-tablet-align-center .elementor-icon-list-item:after {
        margin: auto
      }

      .elementor-widget.elementor-tablet-align-left .elementor-icon-list-items {
        -webkit-box-pack: start;
        -ms-flex-pack: start;
        justify-content: flex-start
      }

      .elementor-widget.elementor-tablet-align-left .elementor-icon-list-item,
      .elementor-widget.elementor-tablet-align-left .elementor-icon-list-item a {
        -webkit-box-pack: start;
        -ms-flex-pack: start;
        justify-content: flex-start;
        text-align: left
      }

      .elementor-widget.elementor-tablet-align-right .elementor-icon-list-items {
        -webkit-box-pack: end;
        -ms-flex-pack: end;
        justify-content: flex-end
      }

      .elementor-widget.elementor-tablet-align-right .elementor-icon-list-item,
      .elementor-widget.elementor-tablet-align-right .elementor-icon-list-item a {
        -webkit-box-pack: end;
        -ms-flex-pack: end;
        justify-content: flex-end;
        text-align: right
      }

      .elementor-widget:not(.elementor-tablet-align-right) .elementor-icon-list-item:after {
        left: 0
      }

      .elementor-widget:not(.elementor-tablet-align-left) .elementor-icon-list-item:after {
        right: 0
      }
    }

    @media (max-width:767px) {

      .elementor-widget.elementor-mobile-align-center .elementor-icon-list-item,
      .elementor-widget.elementor-mobile-align-center .elementor-icon-list-item a,
      .elementor-widget.elementor-mobile-align-center .elementor-icon-list-items {
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center
      }

      .elementor-widget.elementor-mobile-align-center .elementor-icon-list-item:after {
        margin: auto
      }

      .elementor-widget.elementor-mobile-align-left .elementor-icon-list-items {
        -webkit-box-pack: start;
        -ms-flex-pack: start;
        justify-content: flex-start
      }

      .elementor-widget.elementor-mobile-align-left .elementor-icon-list-item,
      .elementor-widget.elementor-mobile-align-left .elementor-icon-list-item a {
        -webkit-box-pack: start;
        -ms-flex-pack: start;
        justify-content: flex-start;
        text-align: left
      }

      .elementor-widget.elementor-mobile-align-right .elementor-icon-list-items {
        -webkit-box-pack: end;
        -ms-flex-pack: end;
        justify-content: flex-end
      }

      .elementor-widget.elementor-mobile-align-right .elementor-icon-list-item,
      .elementor-widget.elementor-mobile-align-right .elementor-icon-list-item a {
        -webkit-box-pack: end;
        -ms-flex-pack: end;
        justify-content: flex-end;
        text-align: right
      }

      .elementor-widget:not(.elementor-mobile-align-right) .elementor-icon-list-item:after {
        left: 0
      }

      .elementor-widget:not(.elementor-mobile-align-left) .elementor-icon-list-item:after {
        right: 0
      }
    }

    .elementor-widget-image {
      text-align: center
    }

    .elementor-widget-image .elementor-image>a,
    .elementor-widget-image .elementor-image figure>a {
      display: inline-block
    }

    .elementor-widget-image .elementor-image>a img[src$=".svg"],
    .elementor-widget-image .elementor-image figure>a img[src$=".svg"] {
      width: 48px
    }

    .elementor-widget-image .elementor-image img {
      vertical-align: middle;
      display: inline-block
    }

    .elementor-widget-image .elementor-image.elementor-image-shape-circle {
      -webkit-border-radius: 50%;
      border-radius: 50%
    }

    .elementor-widget-image-box .elementor-image-box-content {
      width: 100%
    }

    @media (min-width:768px) {

      .elementor-widget-image-box.elementor-position-left .elementor-image-box-wrapper,
      .elementor-widget-image-box.elementor-position-right .elementor-image-box-wrapper {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex
      }

      .elementor-widget-image-box.elementor-position-right .elementor-image-box-wrapper {
        text-align: right;
        -webkit-box-orient: horizontal;
        -webkit-box-direction: reverse;
        -ms-flex-direction: row-reverse;
        flex-direction: row-reverse
      }

      .elementor-widget-image-box.elementor-position-left .elementor-image-box-wrapper {
        text-align: left;
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -ms-flex-direction: row;
        flex-direction: row
      }

      .elementor-widget-image-box.elementor-position-top .elementor-image-box-img {
        margin: auto
      }

      .elementor-widget-image-box.elementor-vertical-align-top .elementor-image-box-wrapper {
        -webkit-box-align: start;
        -ms-flex-align: start;
        align-items: flex-start
      }

      .elementor-widget-image-box.elementor-vertical-align-middle .elementor-image-box-wrapper {
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center
      }

      .elementor-widget-image-box.elementor-vertical-align-bottom .elementor-image-box-wrapper {
        -webkit-box-align: end;
        -ms-flex-align: end;
        align-items: flex-end
      }
    }

    @media (max-width:767px) {
      .elementor-widget-image-box .elementor-image-box-img {
        margin-left: auto !important;
        margin-right: auto !important;
        margin-bottom: 15px
      }
    }

    .elementor-widget-image-box .elementor-image-box-img {
      display: inline-block
    }

    .elementor-widget-image-box .elementor-image-box-title a {
      color: inherit
    }

    .elementor-widget-image-box .elementor-image-box-wrapper {
      text-align: center
    }

    .elementor-widget-image-box .elementor-image-box-description {
      margin: 0
    }

    .elementor-widget-image-carousel .swiper-container {
      position: static
    }

    .elementor-widget-image-carousel .swiper-container .swiper-slide figure {
      line-height: inherit
    }

    .elementor-widget-image-carousel .swiper-slide {
      text-align: center
    }

    .elementor-image-gallery figure img {
      display: block
    }

    .elementor-image-gallery figure figcaption {
      width: 100%
    }

    .gallery-spacing-custom .elementor-image-gallery .gallery-icon {
      padding: 0
    }

    body.elementor-page .elementor-widget-menu-anchor {
      margin-bottom: 0
    }

    .elementor-widget-progress {
      text-align: left
    }

    .elementor-progress-wrapper {
      position: relative;
      background-color: #eee;
      color: #fff;
      height: 100%;
      -webkit-border-radius: 2px;
      border-radius: 2px
    }

    .elementor-progress-bar {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      background-color: #818a91;
      width: 0;
      font-size: 11px;
      height: 30px;
      line-height: 30px;
      -webkit-border-radius: 2px;
      border-radius: 2px;
      -webkit-transition: width 1s ease-in-out;
      -o-transition: width 1s ease-in-out;
      transition: width 1s ease-in-out
    }

    .elementor-progress-text {
      -webkit-box-flex: 1;
      -ms-flex-positive: 1;
      flex-grow: 1;
      white-space: nowrap;
      -o-text-overflow: ellipsis;
      text-overflow: ellipsis;
      overflow: hidden;
      padding-left: 15px
    }

    .elementor-progress-percentage {
      padding-right: 15px
    }

    .elementor-widget-progress .elementor-progress-wrapper.progress-info .elementor-progress-bar {
      background-color: #5bc0de
    }

    .elementor-widget-progress .elementor-progress-wrapper.progress-success .elementor-progress-bar {
      background-color: #5cb85c
    }

    .elementor-widget-progress .elementor-progress-wrapper.progress-warning .elementor-progress-bar {
      background-color: #f0ad4e
    }

    .elementor-widget-progress .elementor-progress-wrapper.progress-danger .elementor-progress-bar {
      background-color: #d9534f
    }

    .elementor-progress .elementor-title {
      display: block
    }

    @media (max-width:767px) {
      .elementor-progress-text {
        padding-left: 10px
      }
    }

    .elementor-widget-social-icons.elementor-grid-0 .elementor-widget-container,
    .elementor-widget-social-icons.elementor-grid-mobile-0 .elementor-widget-container,
    .elementor-widget-social-icons.elementor-grid-tablet-0 .elementor-widget-container {
      line-height: 1;
      font-size: 0
    }

    .elementor-widget-social-icons:not(.elementor-grid-0):not(.elementor-grid-tablet-0):not(.elementor-grid-mobile-0) .elementor-grid {
      display: inline-grid
    }

    .elementor-widget-social-icons .elementor-grid {
      grid-column-gap: var(--grid-column-gap, 5px);
      grid-row-gap: var(--grid-row-gap, 5px);
      grid-template-columns: var(--grid-template-columns);
      -webkit-box-pack: var(--justify-content, center);
      -ms-flex-pack: var(--justify-content, center);
      justify-content: var(--justify-content, center);
      justify-items: var(--justify-content, center)
    }

    .elementor-social-icon {
      display: -webkit-inline-box;
      display: -ms-inline-flexbox;
      display: inline-flex;
      background-color: #818a91;
      font-size: var(--icon-size, 25px);
      line-height: var(--icon-size, 25px);
      width: calc(var(--icon-size, 25px) + 2*var(--icon-padding, .5em));
      height: calc(var(--icon-size, 25px) + 2*var(--icon-padding, .5em));
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center;
      text-align: center;
      cursor: pointer
    }

    .elementor-social-icon i {
      color: #fff
    }

    .elementor-social-icon:last-child {
      margin: 0
    }

    .elementor-social-icon:hover {
      opacity: .9;
      color: #fff
    }

    .elementor-social-icon-android {
      background-color: #a4c639
    }

    .elementor-social-icon-apple {
      background-color: #999
    }

    .elementor-social-icon-behance {
      background-color: #1769ff
    }

    .elementor-social-icon-bitbucket {
      background-color: #205081
    }

    .elementor-social-icon-codepen {
      background-color: #000
    }

    .elementor-social-icon-delicious {
      background-color: #39f
    }

    .elementor-social-icon-deviantart {
      background-color: #05cc47
    }

    .elementor-social-icon-digg {
      background-color: #005be2
    }

    .elementor-social-icon-dribbble {
      background-color: #ea4c89
    }

    .elementor-social-icon-elementor {
      background-color: #d30c5c
    }

    .elementor-social-icon-envelope {
      background-color: #ea4335
    }

    .elementor-social-icon-facebook,
    .elementor-social-icon-facebook-f {
      background-color: #3b5998
    }

    .elementor-social-icon-flickr {
      background-color: #0063dc
    }

    .elementor-social-icon-foursquare {
      background-color: #2d5be3
    }

    .elementor-social-icon-free-code-camp,
    .elementor-social-icon-freecodecamp {
      background-color: #006400
    }

    .elementor-social-icon-github {
      background-color: #333
    }

    .elementor-social-icon-gitlab {
      background-color: #e24329
    }

    .elementor-social-icon-globe {
      background-color: #818a91
    }

    .elementor-social-icon-google-plus,
    .elementor-social-icon-google-plus-g {
      background-color: #dd4b39
    }

    .elementor-social-icon-houzz {
      background-color: #7ac142
    }

    .elementor-social-icon-instagram {
      background-color: #262626
    }

    .elementor-social-icon-jsfiddle {
      background-color: #487aa2
    }

    .elementor-social-icon-link {
      background-color: #818a91
    }

    .elementor-social-icon-linkedin,
    .elementor-social-icon-linkedin-in {
      background-color: #0077b5
    }

    .elementor-social-icon-medium {
      background-color: #00ab6b
    }

    .elementor-social-icon-meetup {
      background-color: #ec1c40
    }

    .elementor-social-icon-mixcloud {
      background-color: #273a4b
    }

    .elementor-social-icon-odnoklassniki {
      background-color: #f4731c
    }

    .elementor-social-icon-pinterest {
      background-color: #bd081c
    }

    .elementor-social-icon-product-hunt {
      background-color: #da552f
    }

    .elementor-social-icon-reddit {
      background-color: #ff4500
    }

    .elementor-social-icon-rss {
      background-color: #f26522
    }

    .elementor-social-icon-shopping-cart {
      background-color: #4caf50
    }

    .elementor-social-icon-skype {
      background-color: #00aff0
    }

    .elementor-social-icon-slideshare {
      background-color: #0077b5
    }

    .elementor-social-icon-snapchat {
      background-color: #fffc00
    }

    .elementor-social-icon-soundcloud {
      background-color: #f80
    }

    .elementor-social-icon-spotify {
      background-color: #2ebd59
    }

    .elementor-social-icon-stack-overflow {
      background-color: #fe7a15
    }

    .elementor-social-icon-steam {
      background-color: #00adee
    }

    .elementor-social-icon-stumbleupon {
      background-color: #eb4924
    }

    .elementor-social-icon-telegram {
      background-color: #2ca5e0
    }

    .elementor-social-icon-thumb-tack {
      background-color: #1aa1d8
    }

    .elementor-social-icon-tripadvisor {
      background-color: #589442
    }

    .elementor-social-icon-tumblr {
      background-color: #35465c
    }

    .elementor-social-icon-twitch {
      background-color: #6441a5
    }

    .elementor-social-icon-twitter {
      background-color: #1da1f2
    }

    .elementor-social-icon-viber {
      background-color: #665cac
    }

    .elementor-social-icon-vimeo {
      background-color: #1ab7ea
    }

    .elementor-social-icon-vk {
      background-color: #45668e
    }

    .elementor-social-icon-weibo {
      background-color: #dd2430
    }

    .elementor-social-icon-weixin {
      background-color: #31a918
    }

    .elementor-social-icon-whatsapp {
      background-color: #25d366
    }

    .elementor-social-icon-wordpress {
      background-color: #21759b
    }

    .elementor-social-icon-xing {
      background-color: #026466
    }

    .elementor-social-icon-yelp {
      background-color: #af0606
    }

    .elementor-social-icon-youtube {
      background-color: #cd201f
    }

    .elementor-social-icon-500px {
      background-color: #0099e5
    }

    .elementor-shape-rounded .elementor-icon.elementor-social-icon {
      -webkit-border-radius: 10%;
      border-radius: 10%
    }

    .elementor-shape-circle .elementor-icon.elementor-social-icon {
      -webkit-border-radius: 50%;
      border-radius: 50%
    }

    .elementor-star-rating {
      color: #ccd6df;
      font-family: eicons;
      display: inline-block
    }

    .elementor-star-rating i {
      display: inline-block;
      position: relative;
      font-style: normal;
      cursor: default
    }

    .elementor-star-rating i:before {
      content: "\e934";
      display: block;
      font-size: inherit;
      font-family: inherit;
      position: absolute;
      overflow: hidden;
      color: #f0ad4e;
      top: 0;
      left: 0
    }

    .elementor-star-rating .elementor-star-empty:before {
      content: none
    }

    .elementor-star-rating .elementor-star-1:before {
      width: 10%
    }

    .elementor-star-rating .elementor-star-2:before {
      width: 20%
    }

    .elementor-star-rating .elementor-star-3:before {
      width: 30%
    }

    .elementor-star-rating .elementor-star-4:before {
      width: 40%
    }

    .elementor-star-rating .elementor-star-5:before {
      width: 50%
    }

    .elementor-star-rating .elementor-star-6:before {
      width: 60%
    }

    .elementor-star-rating .elementor-star-7:before {
      width: 70%
    }

    .elementor-star-rating .elementor-star-8:before {
      width: 80%
    }

    .elementor-star-rating .elementor-star-9:before {
      width: 90%
    }

    .elementor-star-rating__wrapper {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center
    }

    .elementor-star-rating__title {
      margin-right: 10px
    }

    .elementor-star-rating--align-right .elementor-star-rating__wrapper {
      text-align: right;
      -webkit-box-pack: end;
      -ms-flex-pack: end;
      justify-content: flex-end
    }

    .elementor-star-rating--align-left .elementor-star-rating__wrapper {
      text-align: left;
      -webkit-box-pack: start;
      -ms-flex-pack: start;
      justify-content: flex-start
    }

    .elementor-star-rating--align-center .elementor-star-rating__wrapper {
      text-align: center;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center
    }

    .elementor-star-rating--align-justify .elementor-star-rating__title {
      margin-right: auto
    }

    @media (max-width:1024px) {
      .elementor-star-rating-tablet--align-right .elementor-star-rating__wrapper {
        text-align: right;
        -webkit-box-pack: end;
        -ms-flex-pack: end;
        justify-content: flex-end
      }

      .elementor-star-rating-tablet--align-left .elementor-star-rating__wrapper {
        text-align: left;
        -webkit-box-pack: start;
        -ms-flex-pack: start;
        justify-content: flex-start
      }

      .elementor-star-rating-tablet--align-center .elementor-star-rating__wrapper {
        text-align: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center
      }

      .elementor-star-rating-tablet--align-justify .elementor-star-rating__title {
        margin-right: auto
      }
    }

    @media (max-width:767px) {
      .elementor-star-rating-mobile--align-right .elementor-star-rating__wrapper {
        text-align: right;
        -webkit-box-pack: end;
        -ms-flex-pack: end;
        justify-content: flex-end
      }

      .elementor-star-rating-mobile--align-left .elementor-star-rating__wrapper {
        text-align: left;
        -webkit-box-pack: start;
        -ms-flex-pack: start;
        justify-content: flex-start
      }

      .elementor-star-rating-mobile--align-center .elementor-star-rating__wrapper {
        text-align: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center
      }

      .elementor-star-rating-mobile--align-justify .elementor-star-rating__title {
        margin-right: auto
      }
    }

    .last-star {
      letter-spacing: 0
    }

    .elementor--star-style-star_unicode .elementor-star-rating {
      font-family: Arial, Helvetica, sans-serif
    }

    .elementor--star-style-star_unicode .elementor-star-rating i:not(.elementor-star-empty):before {
      content: "\002605"
    }

    .elementor-widget-tabs.elementor-tabs-view-vertical .elementor-tabs-wrapper {
      width: 25%;
      -ms-flex-negative: 0;
      flex-shrink: 0
    }

    .elementor-widget-tabs.elementor-tabs-view-vertical .elementor-tab-desktop-title.elementor-active {
      border-right-style: none
    }

    .elementor-widget-tabs.elementor-tabs-view-vertical .elementor-tab-desktop-title.elementor-active:after,
    .elementor-widget-tabs.elementor-tabs-view-vertical .elementor-tab-desktop-title.elementor-active:before {
      height: 999em;
      width: 0;
      right: 0;
      border-right-style: solid
    }

    .elementor-widget-tabs.elementor-tabs-view-vertical .elementor-tab-desktop-title.elementor-active:before {
      top: 0;
      -webkit-transform: translateY(-100%);
      -ms-transform: translateY(-100%);
      transform: translateY(-100%)
    }

    .elementor-widget-tabs.elementor-tabs-view-vertical .elementor-tab-desktop-title.elementor-active:after {
      top: 100%
    }

    .elementor-widget-tabs.elementor-tabs-view-horizontal .elementor-tab-desktop-title {
      display: table-cell
    }

    .elementor-widget-tabs.elementor-tabs-view-horizontal .elementor-tab-desktop-title.elementor-active {
      border-bottom-style: none
    }

    .elementor-widget-tabs.elementor-tabs-view-horizontal .elementor-tab-desktop-title.elementor-active:after,
    .elementor-widget-tabs.elementor-tabs-view-horizontal .elementor-tab-desktop-title.elementor-active:before {
      bottom: 0;
      height: 0;
      width: 999em;
      border-bottom-style: solid
    }

    .elementor-widget-tabs.elementor-tabs-view-horizontal .elementor-tab-desktop-title.elementor-active:before {
      right: 100%
    }

    .elementor-widget-tabs.elementor-tabs-view-horizontal .elementor-tab-desktop-title.elementor-active:after {
      left: 100%
    }

    .elementor-widget-tabs .elementor-tab-content,
    .elementor-widget-tabs .elementor-tab-title,
    .elementor-widget-tabs .elementor-tab-title:after,
    .elementor-widget-tabs .elementor-tab-title:before,
    .elementor-widget-tabs .elementor-tabs-content-wrapper {
      border: 1px #d4d4d4
    }

    .elementor-widget-tabs .elementor-tabs {
      text-align: left
    }

    .elementor-widget-tabs .elementor-tabs-wrapper {
      overflow: hidden
    }

    .elementor-widget-tabs .elementor-tab-title {
      cursor: pointer;
      outline: none
    }

    .elementor-widget-tabs .elementor-tab-desktop-title {
      position: relative;
      padding: 20px 25px;
      font-weight: 700;
      line-height: 1;
      border: solid transparent
    }

    .elementor-widget-tabs .elementor-tab-desktop-title.elementor-active {
      border-color: #d4d4d4
    }

    .elementor-widget-tabs .elementor-tab-desktop-title.elementor-active:after,
    .elementor-widget-tabs .elementor-tab-desktop-title.elementor-active:before {
      display: block;
      content: "";
      position: absolute
    }

    .elementor-widget-tabs .elementor-tab-mobile-title {
      padding: 10px;
      cursor: pointer
    }

    .elementor-widget-tabs .elementor-tab-content {
      padding: 20px;
      display: none
    }

    @media (max-width:767px) {

      .elementor-tabs .elementor-tab-content,
      .elementor-tabs .elementor-tab-title {
        border-style: solid solid none
      }

      .elementor-tabs .elementor-tabs-wrapper {
        display: none
      }

      .elementor-tabs .elementor-tabs-content-wrapper {
        border-bottom-style: solid
      }

      .elementor-tabs .elementor-tab-content {
        padding: 10px
      }
    }

    @media (min-width:768px) {
      .elementor-widget-tabs.elementor-tabs-view-vertical .elementor-tabs {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex
      }

      .elementor-widget-tabs.elementor-tabs-view-vertical .elementor-tabs-content-wrapper {
        -webkit-box-flex: 1;
        -ms-flex-positive: 1;
        flex-grow: 1;
        border-style: solid solid solid none
      }

      .elementor-widget-tabs.elementor-tabs-view-horizontal .elementor-tab-content {
        border-style: none solid solid
      }

      .elementor-tabs .elementor-tab-mobile-title {
        display: none
      }
    }

    .elementor-testimonial-wrapper {
      overflow: hidden;
      text-align: center
    }

    .elementor-testimonial-wrapper .elementor-testimonial-content {
      font-size: 1.3em;
      margin-bottom: 20px
    }

    .elementor-testimonial-wrapper .elementor-testimonial-name {
      line-height: 1.5;
      color: inherit;
      display: block
    }

    .elementor-testimonial-wrapper .elementor-testimonial-job {
      font-size: .85em;
      color: inherit;
      display: block
    }

    .elementor-testimonial-wrapper.elementor-testimonial-text-align-left {
      text-align: left
    }

    .elementor-testimonial-wrapper.elementor-testimonial-text-align-right {
      text-align: right
    }

    .elementor-testimonial-wrapper .elementor-testimonial-meta {
      width: 100%;
      line-height: 1
    }

    .elementor-testimonial-wrapper .elementor-testimonial-meta-inner {
      display: inline-block
    }

    .elementor-testimonial-wrapper .elementor-testimonial-meta .elementor-testimonial-details,
    .elementor-testimonial-wrapper .elementor-testimonial-meta .elementor-testimonial-image {
      display: table-cell;
      vertical-align: middle
    }

    .elementor-testimonial-wrapper .elementor-testimonial-meta .elementor-testimonial-image img {
      width: 60px;
      height: 60px;
      -webkit-border-radius: 50%;
      border-radius: 50%;
      -o-object-fit: cover;
      object-fit: cover;
      max-width: none
    }

    .elementor-testimonial-wrapper .elementor-testimonial-meta.elementor-testimonial-image-position-aside .elementor-testimonial-image {
      padding-right: 15px
    }

    .elementor-testimonial-wrapper .elementor-testimonial-meta.elementor-testimonial-image-position-aside .elementor-testimonial-details {
      text-align: left
    }

    .elementor-testimonial-wrapper .elementor-testimonial-meta.elementor-testimonial-image-position-top .elementor-testimonial-details,
    .elementor-testimonial-wrapper .elementor-testimonial-meta.elementor-testimonial-image-position-top .elementor-testimonial-image {
      display: block
    }

    .elementor-testimonial-wrapper .elementor-testimonial-meta.elementor-testimonial-image-position-top .elementor-testimonial-image {
      margin-bottom: 20px
    }

    .elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap {
      background-color: #818a91;
      color: #fff
    }

    .elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap {
      color: #818a91;
      border: 3px solid;
      background-color: transparent
    }

    .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap {
      margin-top: 8px
    }

    .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter {
      width: 1em;
      height: 1em
    }

    .elementor-widget-text-editor .elementor-drop-cap {
      float: left;
      text-align: center;
      line-height: 1;
      font-size: 50px
    }

    .elementor-widget-text-editor .elementor-drop-cap-letter {
      display: inline-block
    }

    .elementor-toggle {
      text-align: left
    }

    .elementor-toggle .elementor-tab-title {
      font-weight: 700;
      line-height: 1;
      margin: 0;
      padding: 15px;
      border-bottom: 1px solid #d4d4d4;
      cursor: pointer;
      outline: none
    }

    .elementor-toggle .elementor-tab-title .elementor-toggle-icon {
      display: inline-block;
      width: 1em
    }

    .elementor-toggle .elementor-tab-title .elementor-toggle-icon.elementor-toggle-icon-right {
      float: right;
      text-align: right
    }

    .elementor-toggle .elementor-tab-title .elementor-toggle-icon.elementor-toggle-icon-left {
      float: left;
      text-align: left
    }

    .elementor-toggle .elementor-tab-title .elementor-toggle-icon .elementor-toggle-icon-closed {
      display: block
    }

    .elementor-toggle .elementor-tab-title .elementor-toggle-icon .elementor-toggle-icon-opened {
      display: none
    }

    .elementor-toggle .elementor-tab-title.elementor-active {
      border-bottom: none
    }

    .elementor-toggle .elementor-tab-title.elementor-active .elementor-toggle-icon-closed {
      display: none
    }

    .elementor-toggle .elementor-tab-title.elementor-active .elementor-toggle-icon-opened {
      display: block
    }

    .elementor-toggle .elementor-tab-content {
      padding: 15px;
      border-bottom: 1px solid #d4d4d4;
      display: none
    }

    @media (max-width:767px) {
      .elementor-toggle .elementor-tab-title {
        padding: 12px
      }

      .elementor-toggle .elementor-tab-content {
        padding: 12px 10px
      }
    }

    .elementor-widget-video .elementor-widget-container {
      overflow: hidden;
      -webkit-transform: translateZ(0);
      transform: translateZ(0)
    }

    .elementor-widget-video .elementor-open-inline .elementor-custom-embed-image-overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      -webkit-background-size: cover;
      background-size: cover;
      background-position: 50%
    }

    .elementor-widget-video .elementor-custom-embed-image-overlay {
      cursor: pointer;
      text-align: center
    }

    .elementor-widget-video .elementor-custom-embed-image-overlay:hover .elementor-custom-embed-play i {
      opacity: 1
    }

    .elementor-widget-video .elementor-custom-embed-image-overlay img {
      display: block;
      width: 100%
    }

    .elementor-widget-video .elementor-video {
      -o-object-fit: cover;
      object-fit: cover
    }

    .slick-slider {
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
      -webkit-touch-callout: none;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
      -ms-touch-action: pan-y;
      touch-action: pan-y;
      -webkit-tap-highlight-color: transparent
    }

    .slick-list,
    .slick-slider {
      position: relative;
      display: block
    }

    .slick-list {
      overflow: hidden;
      margin: 0;
      padding: 0
    }

    .slick-list:focus {
      outline: none
    }

    .slick-list.dragging {
      cursor: pointer
    }

    .slick-slider .slick-list,
    .slick-slider .slick-track {
      -webkit-transform: translateZ(0);
      transform: translateZ(0)
    }

    .slick-track {
      position: relative;
      left: 0;
      top: 0;
      display: block
    }

    .slick-track:after,
    .slick-track:before {
      content: "";
      display: table
    }

    .slick-track:after {
      clear: both
    }

    .slick-loading .slick-track {
      visibility: hidden
    }

    .slick-slide {
      float: left;
      height: 100%;
      min-height: 1px;
      display: none
    }

    .elementor-slick-slider[dir=rtl] .slick-slide {
      float: right
    }

    .slick-slide img {
      display: block
    }

    .slick-slide.slick-loading img {
      display: none
    }

    .slick-slide.dragging img {
      pointer-events: none
    }

    .slick-initialized .slick-slide {
      display: block
    }

    .slick-loading .slick-slide {
      visibility: hidden
    }

    .slick-vertical .slick-slide {
      display: block;
      height: auto;
      border: 1px solid transparent
    }

    .slick-arrow.slick-hidden {
      display: none
    }

    .elementor-slick-slider .slick-loading .slick-list {
      background: #fff
    }

    .elementor-slick-slider .slick-loading .slick-list:after {
      content: "\e8fb";
      font-family: eicons;
      position: absolute;
      top: 50%;
      left: 50%;
      -webkit-transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%);
      -webkit-animation: fa-spin 2s linear infinite;
      animation: fa-spin 2s linear infinite;
      font-size: 25px;
      color: #a4afb7
    }

    .elementor-slick-slider .slick-next,
    .elementor-slick-slider .slick-prev {
      font-size: 0;
      line-height: 0;
      position: absolute;
      top: 50%;
      display: block;
      width: 20px;
      padding: 0;
      -webkit-transform: translateY(-50%);
      -ms-transform: translateY(-50%);
      transform: translateY(-50%);
      cursor: pointer;
      color: transparent;
      border: none;
      outline: none;
      background: transparent
    }

    .elementor-slick-slider .slick-next:focus,
    .elementor-slick-slider .slick-next:hover,
    .elementor-slick-slider .slick-prev:focus,
    .elementor-slick-slider .slick-prev:hover {
      color: transparent;
      outline: none;
      background: transparent
    }

    .elementor-slick-slider .slick-next:focus:before,
    .elementor-slick-slider .slick-next:hover:before,
    .elementor-slick-slider .slick-prev:focus:before,
    .elementor-slick-slider .slick-prev:hover:before {
      opacity: 1
    }

    .elementor-slick-slider .slick-next.slick-disabled:before,
    .elementor-slick-slider .slick-prev.slick-disabled:before {
      opacity: .25
    }

    .elementor-slick-slider .slick-next:before,
    .elementor-slick-slider .slick-prev:before {
      font-family: eicons;
      font-size: 35px;
      line-height: 1;
      opacity: .75;
      color: #fff;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale
    }

    .elementor-slick-slider .slick-prev {
      left: -25px
    }

    [dir=rtl] .elementor-slick-slider .slick-prev {
      left: auto;
      right: -25px
    }

    .elementor-slick-slider .slick-prev:before {
      content: "\e89f"
    }

    [dir=rtl] .elementor-slick-slider .slick-prev:before {
      content: "\e89e"
    }

    .elementor-slick-slider .slick-next {
      right: -25px
    }

    [dir=rtl] .elementor-slick-slider .slick-next {
      left: -25px;
      right: auto
    }

    .elementor-slick-slider .slick-next:before {
      content: "\e89e"
    }

    [dir=rtl] .elementor-slick-slider .slick-next:before {
      content: "\e89f"
    }

    .elementor-slick-slider .slick-dotted.slick-slider {
      margin-bottom: 30px
    }

    .elementor-slick-slider ul.slick-dots {
      position: absolute;
      bottom: -25px;
      display: block;
      width: 100%;
      padding: 0;
      margin: 0;
      list-style: none;
      text-align: center;
      line-height: 1
    }

    .elementor-slick-slider ul.slick-dots li {
      position: relative;
      display: inline-block;
      width: 20px;
      height: 20px;
      margin: 0;
      padding: 0;
      cursor: pointer
    }

    .elementor-slick-slider ul.slick-dots li button {
      font-size: 0;
      line-height: 0;
      display: block;
      width: 20px;
      height: 20px;
      padding: 5px;
      cursor: pointer;
      color: transparent;
      border: 0;
      outline: none;
      background: transparent
    }

    .elementor-slick-slider ul.slick-dots li button:focus,
    .elementor-slick-slider ul.slick-dots li button:hover {
      outline: none
    }

    .elementor-slick-slider ul.slick-dots li button:focus:before,
    .elementor-slick-slider ul.slick-dots li button:hover:before {
      opacity: 1
    }

    .elementor-slick-slider ul.slick-dots li button:before {
      font-family: eicons;
      font-size: 6px;
      line-height: 20px;
      position: absolute;
      top: 0;
      left: 0;
      width: 20px;
      height: 20px;
      content: "\e914";
      text-align: center;
      opacity: .25;
      color: #000;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale
    }

    .elementor-slick-slider ul.slick-dots li.slick-active button:before {
      opacity: .75;
      color: #000
    }

    .elementor-slick-slider .slick-arrows-inside .slick-prev {
      left: 20px
    }

    [dir=rtl] .elementor-slick-slider .slick-arrows-inside .slick-prev {
      left: auto;
      right: 20px
    }

    .elementor-slick-slider .slick-arrows-inside .slick-next {
      right: 20px
    }

    [dir=rtl] .elementor-slick-slider .slick-arrows-inside .slick-next {
      left: 20px;
      right: auto
    }

    .elementor-slick-slider .slick-dots-inside .slick-dots {
      bottom: 5px
    }

    .elementor-slick-slider .slick-dots-inside.slick-dotted.slick-slider {
      margin-bottom: 0
    }

    .elementor-slick-slider .slick-slider .slick-next,
    .elementor-slick-slider .slick-slider .slick-prev {
      z-index: 1
    }

    .elementor-slick-slider .slick-slide img {
      margin: auto
    }

    .swiper-container {
      margin-left: auto;
      margin-right: auto;
      position: relative;
      overflow: hidden;
      z-index: 1
    }

    .swiper-container .swiper-slide figure {
      line-height: 0
    }

    .swiper-container .elementor-lightbox-content-source {
      display: none
    }

    .swiper-container-no-flexbox .swiper-slide {
      float: left
    }

    .swiper-container-vertical>.swiper-wrapper {
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -ms-flex-direction: column;
      flex-direction: column
    }

    .swiper-wrapper {
      position: relative;
      width: 100%;
      height: 100%;
      z-index: 1;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-transition-property: -webkit-transform;
      transition-property: -webkit-transform;
      -o-transition-property: transform;
      transition-property: transform;
      transition-property: transform, -webkit-transform;
      -webkit-box-sizing: content-box;
      box-sizing: content-box
    }

    .swiper-container-android .swiper-slide,
    .swiper-wrapper {
      -webkit-transform: translateZ(0);
      transform: translateZ(0)
    }

    .swiper-container-multirow>.swiper-wrapper {
      -ms-flex-wrap: wrap;
      flex-wrap: wrap
    }

    .swiper-container-free-mode>.swiper-wrapper {
      -webkit-transition-timing-function: ease-out;
      -o-transition-timing-function: ease-out;
      transition-timing-function: ease-out;
      margin: 0 auto
    }

    .swiper-slide {
      -ms-flex-negative: 0;
      flex-shrink: 0;
      width: 100%;
      height: 100%;
      position: relative
    }

    .swiper-container-autoheight,
    .swiper-container-autoheight .swiper-slide {
      height: auto
    }

    .swiper-container-autoheight .swiper-wrapper {
      -webkit-box-align: start;
      -ms-flex-align: start;
      align-items: flex-start;
      -webkit-transition-property: height, -webkit-transform;
      transition-property: height, -webkit-transform;
      -o-transition-property: transform, height;
      transition-property: transform, height;
      transition-property: transform, height, -webkit-transform
    }

    .swiper-container .swiper-notification {
      position: absolute;
      left: 0;
      top: 0;
      pointer-events: none;
      opacity: 0;
      z-index: -1000
    }

    .swiper-wp8-horizontal {
      -ms-touch-action: pan-y;
      touch-action: pan-y
    }

    .swiper-wp8-vertical {
      -ms-touch-action: pan-x;
      touch-action: pan-x
    }

    .swiper-button-next,
    .swiper-button-prev {
      position: absolute;
      top: 50%;
      width: 27px;
      height: 44px;
      margin-top: -22px;
      z-index: 10;
      cursor: pointer;
      -webkit-background-size: 27px 44px;
      background-size: 27px 44px;
      background: no-repeat 50%
    }

    .swiper-button-next.swiper-button-disabled,
    .swiper-button-prev.swiper-button-disabled {
      opacity: .35;
      cursor: auto;
      pointer-events: none
    }

    .swiper-button-prev,
    .swiper-container-rtl .swiper-button-next {
      background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 27 44'%3E%3Cpath d='M0 22L22 0l2.1 2.1L4.2 22l19.9 19.9L22 44 0 22z' fill='%23007aff'/%3E%3C/svg%3E");
      left: 10px;
      right: auto
    }

    .swiper-button-prev.swiper-button-black,
    .swiper-container-rtl .swiper-button-next.swiper-button-black {
      background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 27 44'%3E%3Cpath d='M0 22L22 0l2.1 2.1L4.2 22l19.9 19.9L22 44 0 22z'/%3E%3C/svg%3E")
    }

    .swiper-button-prev.swiper-button-white,
    .swiper-container-rtl .swiper-button-next.swiper-button-white {
      background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 27 44'%3E%3Cpath d='M0 22L22 0l2.1 2.1L4.2 22l19.9 19.9L22 44 0 22z' fill='%23fff'/%3E%3C/svg%3E")
    }

    .swiper-button-next,
    .swiper-container-rtl .swiper-button-prev {
      background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 27 44'%3E%3Cpath d='M27 22L5 44l-2.1-2.1L22.8 22 2.9 2.1 5 0l22 22z' fill='%23007aff'/%3E%3C/svg%3E");
      right: 10px;
      left: auto
    }

    .swiper-button-next.swiper-button-black,
    .swiper-container-rtl .swiper-button-prev.swiper-button-black {
      background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 27 44'%3E%3Cpath d='M27 22L5 44l-2.1-2.1L22.8 22 2.9 2.1 5 0l22 22z'/%3E%3C/svg%3E")
    }

    .swiper-button-next.swiper-button-white,
    .swiper-container-rtl .swiper-button-prev.swiper-button-white {
      background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 27 44'%3E%3Cpath d='M27 22L5 44l-2.1-2.1L22.8 22 2.9 2.1 5 0l22 22z' fill='%23fff'/%3E%3C/svg%3E")
    }

    .swiper-pagination {
      position: absolute;
      text-align: center;
      -webkit-transition: .3s;
      -o-transition: .3s;
      transition: .3s;
      -webkit-transform: translateZ(0);
      transform: translateZ(0);
      z-index: 10
    }

    .swiper-pagination.swiper-pagination-hidden {
      opacity: 0
    }

    .swiper-container-horizontal>.swiper-pagination-bullets,
    .swiper-pagination-custom,
    .swiper-pagination-fraction {
      bottom: 5px;
      left: 0;
      width: 100%
    }

    .swiper-pagination-bullet {
      width: 6px;
      height: 6px;
      display: inline-block;
      -webkit-border-radius: 50%;
      border-radius: 50%;
      background: #000;
      opacity: .2
    }

    .swiper-pagination-fraction {
      color: #000
    }

    button.swiper-pagination-bullet {
      border: none;
      margin: 0;
      padding: 0;
      -webkit-box-shadow: none;
      box-shadow: none;
      appearance: none;
      -webkit-appearance: none;
      -moz-appearance: none
    }

    .swiper-pagination-clickable .swiper-pagination-bullet {
      cursor: pointer
    }

    .swiper-pagination-white .swiper-pagination-bullet {
      background: #fff
    }

    .swiper-pagination-bullet-active {
      opacity: 1
    }

    .swiper-pagination-white .swiper-pagination-bullet-active {
      background: #fff
    }

    .swiper-pagination-black .swiper-pagination-bullet-active {
      background: #000
    }

    .swiper-container-vertical>.swiper-pagination-bullets {
      right: 10px;
      top: 50%;
      -webkit-transform: translate3d(0, -50%, 0);
      transform: translate3d(0, -50%, 0)
    }

    .swiper-container-vertical>.swiper-pagination-bullets .swiper-pagination-bullet {
      margin: 5px 0;
      display: block
    }

    .swiper-container-horizontal>.swiper-pagination-bullets .swiper-pagination-bullet {
      margin: 0 6px
    }

    .swiper-pagination-progressbar {
      background: rgba(0, 0, 0, .25);
      position: absolute
    }

    .swiper-pagination-progressbar .swiper-pagination-progressbar-fill {
      background: #000;
      position: absolute;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      -webkit-transform: scale(0);
      -ms-transform: scale(0);
      transform: scale(0);
      -webkit-transform-origin: left top;
      -ms-transform-origin: left top;
      transform-origin: left top
    }

    .swiper-container-rtl .swiper-pagination-progressbar .swiper-pagination-progressbar-fill {
      -webkit-transform-origin: right top;
      -ms-transform-origin: right top;
      transform-origin: right top
    }

    .swiper-container-horizontal>.swiper-pagination-progressbar {
      width: 100%;
      height: 4px;
      left: 0;
      top: 0
    }

    .swiper-container-vertical>.swiper-pagination-progressbar {
      width: 4px;
      height: 100%;
      left: 0;
      top: 0
    }

    .swiper-pagination-progressbar.swiper-pagination-white {
      background: hsla(0, 0%, 100%, .5)
    }

    .swiper-pagination-progressbar.swiper-pagination-white .swiper-pagination-progressbar-fill {
      background: #fff
    }

    .swiper-pagination-progressbar.swiper-pagination-black .swiper-pagination-progressbar-fill {
      background: #000
    }

    .swiper-container-3d {
      -webkit-perspective: 1200px;
      perspective: 1200px
    }

    .swiper-container-3d .swiper-cube-shadow,
    .swiper-container-3d .swiper-slide,
    .swiper-container-3d .swiper-slide-shadow-bottom,
    .swiper-container-3d .swiper-slide-shadow-left,
    .swiper-container-3d .swiper-slide-shadow-right,
    .swiper-container-3d .swiper-slide-shadow-top,
    .swiper-container-3d .swiper-wrapper {
      -webkit-transform-style: preserve-3d;
      transform-style: preserve-3d
    }

    .swiper-container-3d .swiper-slide-shadow-bottom,
    .swiper-container-3d .swiper-slide-shadow-left,
    .swiper-container-3d .swiper-slide-shadow-right,
    .swiper-container-3d .swiper-slide-shadow-top {
      position: absolute;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      pointer-events: none;
      z-index: 10
    }

    .swiper-container-3d .swiper-slide-shadow-left {
      background-image: -webkit-gradient(linear, right top, left top, from(rgba(0, 0, 0, .5)), to(transparent));
      background-image: -webkit-linear-gradient(right, rgba(0, 0, 0, .5), transparent);
      background-image: -o-linear-gradient(right, rgba(0, 0, 0, .5), transparent);
      background-image: linear-gradient(270deg, rgba(0, 0, 0, .5), transparent)
    }

    .swiper-container-3d .swiper-slide-shadow-right {
      background-image: -webkit-gradient(linear, left top, right top, from(rgba(0, 0, 0, .5)), to(transparent));
      background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, .5), transparent);
      background-image: -o-linear-gradient(left, rgba(0, 0, 0, .5), transparent);
      background-image: linear-gradient(90deg, rgba(0, 0, 0, .5), transparent)
    }

    .swiper-container-3d .swiper-slide-shadow-top {
      background-image: -webkit-gradient(linear, left bottom, left top, from(rgba(0, 0, 0, .5)), to(transparent));
      background-image: -webkit-linear-gradient(bottom, rgba(0, 0, 0, .5), transparent);
      background-image: -o-linear-gradient(bottom, rgba(0, 0, 0, .5), transparent);
      background-image: linear-gradient(0deg, rgba(0, 0, 0, .5), transparent)
    }

    .swiper-container-3d .swiper-slide-shadow-bottom {
      background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .5)), to(transparent));
      background-image: -webkit-linear-gradient(top, rgba(0, 0, 0, .5), transparent);
      background-image: -o-linear-gradient(top, rgba(0, 0, 0, .5), transparent);
      background-image: linear-gradient(180deg, rgba(0, 0, 0, .5), transparent)
    }

    .swiper-container-coverflow .swiper-wrapper,
    .swiper-container-flip .swiper-wrapper {
      -ms-perspective: 1200px
    }

    .swiper-container-cube,
    .swiper-container-flip {
      overflow: visible
    }

    .swiper-container-cube .swiper-slide,
    .swiper-container-flip .swiper-slide {
      pointer-events: none;
      z-index: 1
    }

    .swiper-container-cube .swiper-slide .swiper-slide,
    .swiper-container-flip .swiper-slide .swiper-slide {
      pointer-events: none
    }

    .swiper-container-cube .swiper-slide-active,
    .swiper-container-cube .swiper-slide-active .swiper-slide-active,
    .swiper-container-flip .swiper-slide-active,
    .swiper-container-flip .swiper-slide-active .swiper-slide-active {
      pointer-events: auto
    }

    .swiper-container-cube .swiper-slide-shadow-bottom,
    .swiper-container-cube .swiper-slide-shadow-left,
    .swiper-container-cube .swiper-slide-shadow-right,
    .swiper-container-cube .swiper-slide-shadow-top,
    .swiper-container-flip .swiper-slide-shadow-bottom,
    .swiper-container-flip .swiper-slide-shadow-left,
    .swiper-container-flip .swiper-slide-shadow-right,
    .swiper-container-flip .swiper-slide-shadow-top {
      z-index: 0;
      -webkit-backface-visibility: hidden;
      backface-visibility: hidden
    }

    .swiper-container-cube .swiper-slide {
      visibility: hidden;
      -webkit-transform-origin: 0 0;
      -ms-transform-origin: 0 0;
      transform-origin: 0 0;
      width: 100%;
      height: 100%
    }

    .swiper-container-cube.swiper-container-rtl .swiper-slide {
      -webkit-transform-origin: 100% 0;
      -ms-transform-origin: 100% 0;
      transform-origin: 100% 0
    }

    .swiper-container-cube .swiper-slide-active,
    .swiper-container-cube .swiper-slide-next,
    .swiper-container-cube .swiper-slide-next+.swiper-slide,
    .swiper-container-cube .swiper-slide-prev {
      pointer-events: auto;
      visibility: visible
    }

    .swiper-container-cube .swiper-cube-shadow {
      position: absolute;
      left: 0;
      bottom: 0;
      width: 100%;
      height: 100%;
      background: #000;
      opacity: .6;
      -webkit-filter: blur(50px);
      filter: blur(50px);
      z-index: 0
    }

    .swiper-container-fade.swiper-container-free-mode .swiper-slide {
      -webkit-transition-timing-function: ease-out;
      -o-transition-timing-function: ease-out;
      transition-timing-function: ease-out
    }

    .swiper-container-fade .swiper-slide {
      pointer-events: none;
      -webkit-transition-property: opacity;
      -o-transition-property: opacity;
      transition-property: opacity
    }

    .swiper-container-fade .swiper-slide .swiper-slide {
      pointer-events: none
    }

    .swiper-container-fade .swiper-slide-active,
    .swiper-container-fade .swiper-slide-active .swiper-slide-active {
      pointer-events: auto
    }

    .swiper-zoom-container {
      width: 100%;
      height: 100%;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      text-align: center
    }

    .swiper-zoom-container>canvas,
    .swiper-zoom-container>img,
    .swiper-zoom-container>svg {
      max-width: 100%;
      max-height: 100%;
      -o-object-fit: contain;
      object-fit: contain
    }

    .swiper-scrollbar {
      -webkit-border-radius: 10px;
      border-radius: 10px;
      position: relative;
      -ms-touch-action: none;
      background: rgba(0, 0, 0, .1)
    }

    .swiper-container-horizontal>.swiper-scrollbar {
      position: absolute;
      left: 1%;
      bottom: 3px;
      z-index: 50;
      height: 5px;
      width: 98%
    }

    .swiper-container-vertical>.swiper-scrollbar {
      position: absolute;
      right: 3px;
      top: 1%;
      z-index: 50;
      width: 5px;
      height: 98%
    }

    .swiper-scrollbar-drag {
      height: 100%;
      width: 100%;
      position: relative;
      background: rgba(0, 0, 0, .5);
      -webkit-border-radius: 10px;
      border-radius: 10px;
      left: 0;
      top: 0
    }

    .swiper-scrollbar-cursor-drag {
      cursor: move
    }

    .elementor-pagination-position-outside .swiper-container {
      padding-bottom: 30px
    }

    .elementor-pagination-position-outside .elementor-swiper-button {
      top: calc(50% - 15px)
    }

    .elementor-swiper {
      position: relative
    }

    .elementor-main-swiper {
      position: static
    }

    .elementor-arrows-position-outside .swiper-container {
      width: calc(100% - 60px)
    }

    .elementor-arrows-position-outside .elementor-swiper-button-prev {
      left: 0
    }

    .elementor-arrows-position-outside .elementor-swiper-button-next {
      right: 0
    }

    .swiper-image-stretch .swiper-slide .swiper-slide-image {
      width: 100%
    }

    .elementor-swiper-button {
      position: absolute;
      display: -webkit-inline-box;
      display: -ms-inline-flexbox;
      display: inline-flex;
      z-index: 1;
      cursor: pointer;
      font-size: 25px;
      color: hsla(0, 0%, 93.3%, .9);
      top: 50%;
      -webkit-transform: translate3d(0, -50%, 1px);
      transform: translate3d(0, -50%, 1px)
    }

    .elementor-swiper-button-prev {
      left: 10px
    }

    .elementor-swiper-button-next {
      right: 10px
    }

    .elementor-swiper-button.swiper-button-disabled {
      opacity: .3
    }

    .swiper-lazy-preloader {
      width: 42px;
      height: 42px;
      position: absolute;
      left: 50%;
      top: 50%;
      margin-left: -21px;
      margin-top: -21px;
      z-index: 10;
      -webkit-transform-origin: 50%;
      -ms-transform-origin: 50%;
      transform-origin: 50%;
      -webkit-animation: swiper-preloader-spin 1s steps(12) infinite;
      animation: swiper-preloader-spin 1s steps(12) infinite
    }

    .swiper-lazy-preloader:after {
      display: block;
      content: "";
      width: 100%;
      height: 100%;
      -webkit-background-size: 100% 100%;
      background-size: 100%;
      background: url("data:image/svg+xml;charset=utf-8,%3Csvg viewBox='0 0 120 120' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'%3E%3Cdefs%3E%3Cpath id='a' stroke='%236c6c6c' stroke-width='11' stroke-linecap='round' d='M60 7v20'/%3E%3C/defs%3E%3Cuse xlink:href='%23a' opacity='.27'/%3E%3Cuse xlink:href='%23a' opacity='.27' transform='rotate(30 60 60)'/%3E%3Cuse xlink:href='%23a' opacity='.27' transform='rotate(60 60 60)'/%3E%3Cuse xlink:href='%23a' opacity='.27' transform='rotate(90 60 60)'/%3E%3Cuse xlink:href='%23a' opacity='.27' transform='rotate(120 60 60)'/%3E%3Cuse xlink:href='%23a' opacity='.27' transform='rotate(150 60 60)'/%3E%3Cuse xlink:href='%23a' opacity='.37' transform='rotate(180 60 60)'/%3E%3Cuse xlink:href='%23a' opacity='.46' transform='rotate(210 60 60)'/%3E%3Cuse xlink:href='%23a' opacity='.56' transform='rotate(240 60 60)'/%3E%3Cuse xlink:href='%23a' opacity='.66' transform='rotate(270 60 60)'/%3E%3Cuse xlink:href='%23a' opacity='.75' transform='rotate(300 60 60)'/%3E%3Cuse xlink:href='%23a' opacity='.85' transform='rotate(330 60 60)'/%3E%3C/svg%3E") no-repeat 50%
    }

    .swiper-lazy-preloader-white:after {
      background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg viewBox='0 0 120 120' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'%3E%3Cdefs%3E%3Cpath id='a' stroke='%23fff' stroke-width='11' stroke-linecap='round' d='M60 7v20'/%3E%3C/defs%3E%3Cuse xlink:href='%23a' opacity='.27'/%3E%3Cuse xlink:href='%23a' opacity='.27' transform='rotate(30 60 60)'/%3E%3Cuse xlink:href='%23a' opacity='.27' transform='rotate(60 60 60)'/%3E%3Cuse xlink:href='%23a' opacity='.27' transform='rotate(90 60 60)'/%3E%3Cuse xlink:href='%23a' opacity='.27' transform='rotate(120 60 60)'/%3E%3Cuse xlink:href='%23a' opacity='.27' transform='rotate(150 60 60)'/%3E%3Cuse xlink:href='%23a' opacity='.37' transform='rotate(180 60 60)'/%3E%3Cuse xlink:href='%23a' opacity='.46' transform='rotate(210 60 60)'/%3E%3Cuse xlink:href='%23a' opacity='.56' transform='rotate(240 60 60)'/%3E%3Cuse xlink:href='%23a' opacity='.66' transform='rotate(270 60 60)'/%3E%3Cuse xlink:href='%23a' opacity='.75' transform='rotate(300 60 60)'/%3E%3Cuse xlink:href='%23a' opacity='.85' transform='rotate(330 60 60)'/%3E%3C/svg%3E")
    }

    @-webkit-keyframes swiper-preloader-spin {
      to {
        -webkit-transform: rotate(1turn);
        transform: rotate(1turn)
      }
    }

    @keyframes swiper-preloader-spin {
      to {
        -webkit-transform: rotate(1turn);
        transform: rotate(1turn)
      }
    }

    .elementor-lightbox {
      --lightbox-ui-color: hsla(0, 0%, 93.3%, 0.9);
      --lightbox-ui-color-hover: #fff;
      --lightbox-text-color: var(--lightbox-ui-color);
      --lightbox-header-icons-size: 20px;
      --lightbox-navigation-icons-size: 25px
    }

    .elementor-lightbox .dialog-header {
      display: none
    }

    .elementor-lightbox .dialog-widget-content {
      background: none;
      -webkit-box-shadow: none;
      box-shadow: none;
      width: 100%;
      height: 100%
    }

    .elementor-lightbox .dialog-message {
      -webkit-animation-duration: .3s;
      animation-duration: .3s
    }

    .elementor-lightbox .dialog-message:not(.elementor-fit-aspect-ratio) {
      height: 100%
    }

    .elementor-lightbox .dialog-message.dialog-lightbox-message {
      padding: 0
    }

    .elementor-lightbox .dialog-lightbox-close-button {
      cursor: pointer;
      position: absolute;
      font-size: var(--lightbox-header-icons-size);
      right: .75em;
      margin-top: 13px;
      padding: .25em;
      z-index: 2;
      line-height: 1
    }

    .elementor-lightbox .dialog-lightbox-close-button,
    .elementor-lightbox .elementor-swiper-button {
      color: var(--lightbox-ui-color);
      -webkit-transition: all .3s;
      -o-transition: all .3s;
      transition: all .3s;
      opacity: 1
    }

    .elementor-lightbox .dialog-lightbox-close-button:hover,
    .elementor-lightbox .elementor-swiper-button:hover {
      color: var(--lightbox-ui-color-hover)
    }

    .elementor-lightbox .swiper-container {
      height: 100%
    }

    .elementor-lightbox .elementor-lightbox-item {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center;
      position: relative;
      padding: 70px;
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
      height: 100%;
      margin: auto
    }

    @media (max-width:767px) {
      .elementor-lightbox .elementor-lightbox-item {
        padding: 70px 0
      }
    }

    .elementor-lightbox .elementor-lightbox-image {
      max-height: 100%;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none
    }

    .elementor-lightbox .elementor-lightbox-image,
    .elementor-lightbox .elementor-lightbox-image:hover {
      opacity: 1;
      -webkit-filter: none;
      filter: none;
      border: none
    }

    .elementor-lightbox .elementor-lightbox-image,
    .elementor-lightbox .elementor-video-container {
      -webkit-box-shadow: 0 0 30px rgba(0, 0, 0, .3), 0 0 8px -5px rgba(0, 0, 0, .3);
      box-shadow: 0 0 30px rgba(0, 0, 0, .3), 0 0 8px -5px rgba(0, 0, 0, .3);
      -webkit-border-radius: 2px;
      border-radius: 2px
    }

    .elementor-lightbox .elementor-video-container {
      position: absolute;
      top: 50%;
      left: 50%;
      -webkit-transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%)
    }

    @media (min-width:1025px) {
      .elementor-lightbox .elementor-video-container {
        width: 75%
      }
    }

    @media (max-width:1024px) {
      .elementor-lightbox .elementor-video-container {
        width: 100%
      }
    }

    @media (min-width:768px) and (max-width:1024px) {
      .elementor-lightbox .elementor-aspect-ratio-916 .elementor-video-container {
        width: 70%
      }
    }

    .elementor-lightbox .elementor-swiper-button:focus {
      outline-width: 1px
    }

    .elementor-lightbox .elementor-swiper-button-next,
    .elementor-lightbox .elementor-swiper-button-prev {
      height: 100%;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      width: 15%;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center;
      font-size: var(--lightbox-navigation-icons-size)
    }

    .elementor-lightbox .elementor-swiper-button-prev {
      left: 0
    }

    .elementor-lightbox .elementor-swiper-button-next {
      right: 0
    }

    @media (max-width:767px) {

      .elementor-lightbox .elementor-swiper-button-next,
      .elementor-lightbox .elementor-swiper-button-prev {
        width: 20%
      }

      .elementor-lightbox .elementor-swiper-button-next i,
      .elementor-lightbox .elementor-swiper-button-prev i {
        padding: 10px;
        background-color: rgba(0, 0, 0, .5)
      }

      .elementor-lightbox .elementor-swiper-button-prev {
        left: 0;
        -webkit-box-pack: start;
        -ms-flex-pack: start;
        justify-content: flex-start
      }

      .elementor-lightbox .elementor-swiper-button-next {
        right: 0;
        -webkit-box-pack: end;
        -ms-flex-pack: end;
        justify-content: flex-end
      }
    }

    .elementor-slideshow__counter {
      color: currentColor;
      font-size: .75em;
      width: -webkit-max-content;
      width: -moz-max-content;
      width: max-content
    }

    .elementor-slideshow__footer,
    .elementor-slideshow__header {
      position: absolute;
      left: 0;
      width: 100%;
      padding: 15px 20px;
      -webkit-transition: .3s;
      -o-transition: .3s;
      transition: .3s
    }

    .elementor-slideshow__footer {
      color: var(--lightbox-text-color)
    }

    .elementor-slideshow__header {
      color: var(--lightbox-ui-color);
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-orient: horizontal;
      -webkit-box-direction: reverse;
      -ms-flex-direction: row-reverse;
      flex-direction: row-reverse;
      font-size: var(--lightbox-header-icons-size);
      padding-left: 1em;
      padding-right: 2.6em;
      top: 0;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      z-index: 10
    }

    .elementor-slideshow__header>i {
      font-size: inherit;
      cursor: pointer;
      padding: .25em;
      margin: 0 .35em
    }

    .elementor-slideshow__header>i:hover {
      color: var(--lightbox-ui-color-hover)
    }

    .elementor-slideshow__header .elementor-slideshow__counter {
      margin-right: auto
    }

    .elementor-slideshow__header .elementor-icon-share {
      z-index: 5
    }

    .elementor-slideshow__share-menu {
      background-color: transparent;
      width: 0;
      height: 0;
      position: absolute;
      overflow: hidden;
      -webkit-transition: background-color .4s;
      -o-transition: background-color .4s;
      transition: background-color .4s
    }

    .elementor-slideshow__share-menu .elementor-slideshow__share-links a {
      color: #2c2c2c
    }

    .elementor-slideshow__share-links {
      display: block;
      position: absolute;
      min-width: 200px;
      right: 2.8em;
      top: 3em;
      background-color: #fff;
      -webkit-border-radius: 3px;
      border-radius: 3px;
      padding: 14px 20px;
      -webkit-transform: scale(0);
      -ms-transform: scale(0);
      transform: scale(0);
      opacity: 0;
      -webkit-transform-origin: 90% 10%;
      -ms-transform-origin: 90% 10%;
      transform-origin: 90% 10%;
      -webkit-transition: all .25s .1s;
      -o-transition: all .25s .1s;
      transition: all .25s .1s;
      -webkit-box-shadow: 0 4px 15px rgba(0, 0, 0, .3);
      box-shadow: 0 4px 15px rgba(0, 0, 0, .3)
    }

    .elementor-slideshow__share-links a {
      text-align: left;
      color: #55595c;
      font-size: 12px;
      line-height: 2.5;
      display: block;
      opacity: 0;
      -webkit-transition: opacity .5s .1s;
      -o-transition: opacity .5s .1s;
      transition: opacity .5s .1s
    }

    .elementor-slideshow__share-links a:hover {
      color: #000
    }

    .elementor-slideshow__share-links a i {
      font-size: 1.25em;
      margin-right: .75em
    }

    .elementor-slideshow__share-links:before {
      content: "";
      display: block;
      position: absolute;
      top: 1px;
      right: .5em;
      border: .45em solid transparent;
      border-bottom-color: #fff;
      -webkit-transform: translateY(-100%) scaleX(.7);
      -ms-transform: translateY(-100%) scaleX(.7);
      transform: translateY(-100%) scaleX(.7)
    }

    .elementor-slideshow__footer {
      bottom: 0;
      z-index: 5;
      position: fixed
    }

    .elementor-slideshow__description,
    .elementor-slideshow__title {
      margin: 0
    }

    .elementor-slideshow__title {
      font-size: 16px;
      font-weight: 700
    }

    .elementor-slideshow__description {
      font-size: 14px
    }

    .elementor-slideshow--ui-hidden .elementor-slideshow__footer,
    .elementor-slideshow--ui-hidden .elementor-slideshow__header {
      opacity: 0;
      pointer-events: none
    }

    .elementor-slideshow--ui-hidden .elementor-swiper-button-next,
    .elementor-slideshow--ui-hidden .elementor-swiper-button-prev {
      opacity: 0
    }

    .elementor-slideshow--fullscreen-mode .elementor-video-container {
      width: 100%
    }

    .elementor-slideshow--zoom-mode .elementor-slideshow__footer,
    .elementor-slideshow--zoom-mode .elementor-slideshow__header {
      background-color: rgba(0, 0, 0, .5)
    }

    .elementor-slideshow--zoom-mode .elementor-swiper-button-next,
    .elementor-slideshow--zoom-mode .elementor-swiper-button-prev {
      opacity: 0;
      pointer-events: none
    }

    .elementor-slideshow--share-mode .elementor-slideshow__share-menu {
      top: 0;
      left: 0;
      width: 100vw;
      height: 100vh;
      opacity: 1;
      cursor: default;
      background-color: rgba(0, 0, 0, .5)
    }

    .elementor-slideshow--share-mode .elementor-slideshow__share-links {
      -webkit-transform: scale(1);
      -ms-transform: scale(1);
      transform: scale(1)
    }

    .elementor-slideshow--share-mode .elementor-slideshow__share-links,
    .elementor-slideshow--share-mode .elementor-slideshow__share-links a {
      opacity: 1
    }

    .elementor-slideshow--share-mode .elementor-slideshow__share-links .eicon-twitter {
      color: #1da1f2
    }

    .elementor-slideshow--share-mode .elementor-slideshow__share-links .eicon-facebook {
      color: #3b5998
    }

    .elementor-slideshow--share-mode .elementor-slideshow__share-links .eicon-pinterest {
      color: #bd081c
    }

    .elementor-slideshow--share-mode .elementor-slideshow__share-links .eicon-download-bold {
      color: #a4afb7
    }

    .elementor-slideshow--share-mode .eicon-share-arrow {
      z-index: 2
    }

    .animated {
      -webkit-animation-duration: 1.25s;
      animation-duration: 1.25s
    }

    .animated.animated-slow {
      -webkit-animation-duration: 2s;
      animation-duration: 2s
    }

    .animated.animated-fast {
      -webkit-animation-duration: .75s;
      animation-duration: .75s
    }

    .animated.infinite {
      -webkit-animation-iteration-count: infinite;
      animation-iteration-count: infinite
    }

    .animated.reverse {
      animation-direction: reverse
    }

    @media (prefers-reduced-motion:reduce) {
      .animated {
        -webkit-animation: none;
        animation: none
      }
    }

    .elementor-shape {
      overflow: hidden;
      position: absolute;
      left: 0;
      width: 100%;
      line-height: 0;
      direction: ltr
    }

    .elementor-shape-top {
      top: -1px
    }

    .elementor-shape-top:not([data-negative=false]) svg {
      z-index: -1
    }

    .elementor-shape-bottom {
      bottom: -1px
    }

    .elementor-shape-bottom:not([data-negative=true]) svg {
      z-index: -1
    }

    .elementor-shape[data-negative=false].elementor-shape-bottom,
    .elementor-shape[data-negative=true].elementor-shape-top {
      -webkit-transform: rotate(180deg);
      -ms-transform: rotate(180deg);
      transform: rotate(180deg)
    }

    .elementor-shape svg {
      display: block;
      width: calc(100% + 1.3px);
      position: relative;
      left: 50%;
      -webkit-transform: translateX(-50%);
      -ms-transform: translateX(-50%);
      transform: translateX(-50%)
    }

    .elementor-shape .elementor-shape-fill {
      fill: #fff;
      -webkit-transform-origin: center;
      -ms-transform-origin: center;
      transform-origin: center;
      -webkit-transform: rotateY(0deg);
      transform: rotateY(0deg)
    }

    #wp-admin-bar-elementor_edit_page .ab-submenu .ab-item {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      width: 200px
    }

    #wp-admin-bar-elementor_edit_page .elementor-edit-link-title {
      white-space: nowrap;
      -o-text-overflow: ellipsis;
      text-overflow: ellipsis;
      overflow: hidden;
      width: 100%
    }

    #wp-admin-bar-elementor_edit_page .elementor-edit-link-type {
      background: #55595c;
      font-size: 11px;
      line-height: 9px;
      margin-top: 6px;
      padding: 4px 8px;
      -webkit-border-radius: 3px;
      border-radius: 3px
    }

    .page-template-elementor_canvas.elementor-page:before {
      display: none
    }

    .elementor-post__thumbnail__link {
      -webkit-transition: none;
      -o-transition: none;
      transition: none
    }

    #left-area ul.elementor-icon-list-items,
    .elementor-edit-area .elementor-element ul.elementor-icon-list-items,
    .elementor .elementor-element ul.elementor-icon-list-items {
      padding: 0
    }

    #wpadminbar * {
      font-style: normal
    }

    .elementor-portfolio.elementor-grid {
      display: grid
    }

    .elementor-share-buttons--align-right {
      text-align: right
    }

    .elementor-share-buttons--align-left {
      text-align: left
    }

    .elementor-share-buttons--align-center {
      text-align: center
    }

    .elementor-share-buttons--align-justify {
      text-align: justify;
      -moz-text-align-last: justify;
      text-align-last: justify
    }

    @media (max-width:1024px) {
      .elementor-share-buttons-tablet--align-right {
        text-align: right
      }

      .elementor-share-buttons-tablet--align-left {
        text-align: left
      }

      .elementor-share-buttons-tablet--align-center {
        text-align: center
      }

      .elementor-share-buttons-tablet--align-justify {
        text-align: justify;
        -moz-text-align-last: justify;
        text-align-last: justify
      }
    }

    @media (max-width:767px) {
      .elementor-share-buttons-mobile--align-right {
        text-align: right
      }

      .elementor-share-buttons-mobile--align-left {
        text-align: left
      }

      .elementor-share-buttons-mobile--align-center {
        text-align: center
      }

      .elementor-share-buttons-mobile--align-justify {
        text-align: justify;
        -moz-text-align-last: justify;
        text-align-last: justify
      }
    }

    @media (max-width:767px) {
      .elementor .elementor-hidden-phone {
        display: none
      }
    }

    @media (min-width:768px) and (max-width:1024px) {
      .elementor .elementor-hidden-tablet {
        display: none
      }
    }

    @media (min-width:1025px) {
      .elementor .elementor-hidden-desktop {
        display: none
      }
    }

    /*!
 * Font Awesome Free 5.12.0 by @fontawesome - https://fontawesome.com
 * License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License)
 */
    .fa,
    .fab,
    .fad,
    .fal,
    .far,
    .fas {
      -moz-osx-font-smoothing: grayscale;
      -webkit-font-smoothing: antialiased;
      display: inline-block;
      font-style: normal;
      font-variant: normal;
      text-rendering: auto;
      line-height: 1
    }

    .fa-lg {
      font-size: 1.33333em;
      line-height: .75em;
      vertical-align: -.0667em
    }

    .fa-xs {
      font-size: .75em
    }

    .fa-sm {
      font-size: .875em
    }

    .fa-1x {
      font-size: 1em
    }

    .fa-2x {
      font-size: 2em
    }

    .fa-3x {
      font-size: 3em
    }

    .fa-4x {
      font-size: 4em
    }

    .fa-5x {
      font-size: 5em
    }

    .fa-6x {
      font-size: 6em
    }

    .fa-7x {
      font-size: 7em
    }

    .fa-8x {
      font-size: 8em
    }

    .fa-9x {
      font-size: 9em
    }

    .fa-10x {
      font-size: 10em
    }

    .fa-fw {
      text-align: center;
      width: 1.25em
    }

    .fa-ul {
      list-style-type: none;
      margin-left: 2.5em;
      padding-left: 0
    }

    .fa-ul>li {
      position: relative
    }

    .fa-li {
      left: -2em;
      position: absolute;
      text-align: center;
      width: 2em;
      line-height: inherit
    }

    .fa-border {
      border: .08em solid #eee;
      border-radius: .1em;
      padding: .2em .25em .15em
    }

    .fa-pull-left {
      float: left
    }

    .fa-pull-right {
      float: right
    }

    .fa.fa-pull-left,
    .fab.fa-pull-left,
    .fal.fa-pull-left,
    .far.fa-pull-left,
    .fas.fa-pull-left {
      margin-right: .3em
    }

    .fa.fa-pull-right,
    .fab.fa-pull-right,
    .fal.fa-pull-right,
    .far.fa-pull-right,
    .fas.fa-pull-right {
      margin-left: .3em
    }

    .fa-spin {
      -webkit-animation: fa-spin 2s linear infinite;
      animation: fa-spin 2s linear infinite
    }

    .fa-pulse {
      -webkit-animation: fa-spin 1s steps(8) infinite;
      animation: fa-spin 1s steps(8) infinite
    }

    @-webkit-keyframes fa-spin {
      0% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg)
      }

      to {
        -webkit-transform: rotate(1turn);
        transform: rotate(1turn)
      }
    }

    @keyframes fa-spin {
      0% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg)
      }

      to {
        -webkit-transform: rotate(1turn);
        transform: rotate(1turn)
      }
    }

    .fa-rotate-90 {
      -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=1)";
      -webkit-transform: rotate(90deg);
      transform: rotate(90deg)
    }

    .fa-rotate-180 {
      -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2)";
      -webkit-transform: rotate(180deg);
      transform: rotate(180deg)
    }

    .fa-rotate-270 {
      -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=3)";
      -webkit-transform: rotate(270deg);
      transform: rotate(270deg)
    }

    .fa-flip-horizontal {
      -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1)";
      -webkit-transform: scaleX(-1);
      transform: scaleX(-1)
    }

    .fa-flip-vertical {
      -webkit-transform: scaleY(-1);
      transform: scaleY(-1)
    }

    .fa-flip-both,
    .fa-flip-horizontal.fa-flip-vertical,
    .fa-flip-vertical {
      -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)"
    }

    .fa-flip-both,
    .fa-flip-horizontal.fa-flip-vertical {
      -webkit-transform: scale(-1);
      transform: scale(-1)
    }

    :root .fa-flip-both,
    :root .fa-flip-horizontal,
    :root .fa-flip-vertical,
    :root .fa-rotate-90,
    :root .fa-rotate-180,
    :root .fa-rotate-270 {
      -webkit-filter: none;
      filter: none
    }

    .fa-stack {
      display: inline-block;
      height: 2em;
      line-height: 2em;
      position: relative;
      vertical-align: middle;
      width: 2.5em
    }

    .fa-stack-1x,
    .fa-stack-2x {
      left: 0;
      position: absolute;
      text-align: center;
      width: 100%
    }

    .fa-stack-1x {
      line-height: inherit
    }

    .fa-stack-2x {
      font-size: 2em
    }

    .fa-inverse {
      color: #fff
    }

    .fa-500px:before {
      content: "\f26e"
    }

    .fa-accessible-icon:before {
      content: "\f368"
    }

    .fa-accusoft:before {
      content: "\f369"
    }

    .fa-acquisitions-incorporated:before {
      content: "\f6af"
    }

    .fa-ad:before {
      content: "\f641"
    }

    .fa-address-book:before {
      content: "\f2b9"
    }

    .fa-address-card:before {
      content: "\f2bb"
    }

    .fa-adjust:before {
      content: "\f042"
    }

    .fa-adn:before {
      content: "\f170"
    }

    .fa-adobe:before {
      content: "\f778"
    }

    .fa-adversal:before {
      content: "\f36a"
    }

    .fa-affiliatetheme:before {
      content: "\f36b"
    }

    .fa-air-freshener:before {
      content: "\f5d0"
    }

    .fa-airbnb:before {
      content: "\f834"
    }

    .fa-algolia:before {
      content: "\f36c"
    }

    .fa-align-center:before {
      content: "\f037"
    }

    .fa-align-justify:before {
      content: "\f039"
    }

    .fa-align-left:before {
      content: "\f036"
    }

    .fa-align-right:before {
      content: "\f038"
    }

    .fa-alipay:before {
      content: "\f642"
    }

    .fa-allergies:before {
      content: "\f461"
    }

    .fa-amazon:before {
      content: "\f270"
    }

    .fa-amazon-pay:before {
      content: "\f42c"
    }

    .fa-ambulance:before {
      content: "\f0f9"
    }

    .fa-american-sign-language-interpreting:before {
      content: "\f2a3"
    }

    .fa-amilia:before {
      content: "\f36d"
    }

    .fa-anchor:before {
      content: "\f13d"
    }

    .fa-android:before {
      content: "\f17b"
    }

    .fa-angellist:before {
      content: "\f209"
    }

    .fa-angle-double-down:before {
      content: "\f103"
    }

    .fa-angle-double-left:before {
      content: "\f100"
    }

    .fa-angle-double-right:before {
      content: "\f101"
    }

    .fa-angle-double-up:before {
      content: "\f102"
    }

    .fa-angle-down:before {
      content: "\f107"
    }

    .fa-angle-left:before {
      content: "\f104"
    }

    .fa-angle-right:before {
      content: "\f105"
    }

    .fa-angle-up:before {
      content: "\f106"
    }

    .fa-angry:before {
      content: "\f556"
    }

    .fa-angrycreative:before {
      content: "\f36e"
    }

    .fa-angular:before {
      content: "\f420"
    }

    .fa-ankh:before {
      content: "\f644"
    }

    .fa-app-store:before {
      content: "\f36f"
    }

    .fa-app-store-ios:before {
      content: "\f370"
    }

    .fa-apper:before {
      content: "\f371"
    }

    .fa-apple:before {
      content: "\f179"
    }

    .fa-apple-alt:before {
      content: "\f5d1"
    }

    .fa-apple-pay:before {
      content: "\f415"
    }

    .fa-archive:before {
      content: "\f187"
    }

    .fa-archway:before {
      content: "\f557"
    }

    .fa-arrow-alt-circle-down:before {
      content: "\f358"
    }

    .fa-arrow-alt-circle-left:before {
      content: "\f359"
    }

    .fa-arrow-alt-circle-right:before {
      content: "\f35a"
    }

    .fa-arrow-alt-circle-up:before {
      content: "\f35b"
    }

    .fa-arrow-circle-down:before {
      content: "\f0ab"
    }

    .fa-arrow-circle-left:before {
      content: "\f0a8"
    }

    .fa-arrow-circle-right:before {
      content: "\f0a9"
    }

    .fa-arrow-circle-up:before {
      content: "\f0aa"
    }

    .fa-arrow-down:before {
      content: "\f063"
    }

    .fa-arrow-left:before {
      content: "\f060"
    }

    .fa-arrow-right:before {
      content: "\f061"
    }

    .fa-arrow-up:before {
      content: "\f062"
    }

    .fa-arrows-alt:before {
      content: "\f0b2"
    }

    .fa-arrows-alt-h:before {
      content: "\f337"
    }

    .fa-arrows-alt-v:before {
      content: "\f338"
    }

    .fa-artstation:before {
      content: "\f77a"
    }

    .fa-assistive-listening-systems:before {
      content: "\f2a2"
    }

    .fa-asterisk:before {
      content: "\f069"
    }

    .fa-asymmetrik:before {
      content: "\f372"
    }

    .fa-at:before {
      content: "\f1fa"
    }

    .fa-atlas:before {
      content: "\f558"
    }

    .fa-atlassian:before {
      content: "\f77b"
    }

    .fa-atom:before {
      content: "\f5d2"
    }

    .fa-audible:before {
      content: "\f373"
    }

    .fa-audio-description:before {
      content: "\f29e"
    }

    .fa-autoprefixer:before {
      content: "\f41c"
    }

    .fa-avianex:before {
      content: "\f374"
    }

    .fa-aviato:before {
      content: "\f421"
    }

    .fa-award:before {
      content: "\f559"
    }

    .fa-aws:before {
      content: "\f375"
    }

    .fa-baby:before {
      content: "\f77c"
    }

    .fa-baby-carriage:before {
      content: "\f77d"
    }

    .fa-backspace:before {
      content: "\f55a"
    }

    .fa-backward:before {
      content: "\f04a"
    }

    .fa-bacon:before {
      content: "\f7e5"
    }

    .fa-bahai:before {
      content: "\f666"
    }

    .fa-balance-scale:before {
      content: "\f24e"
    }

    .fa-balance-scale-left:before {
      content: "\f515"
    }

    .fa-balance-scale-right:before {
      content: "\f516"
    }

    .fa-ban:before {
      content: "\f05e"
    }

    .fa-band-aid:before {
      content: "\f462"
    }

    .fa-bandcamp:before {
      content: "\f2d5"
    }

    .fa-barcode:before {
      content: "\f02a"
    }

    .fa-bars:before {
      content: "\f0c9"
    }

    .fa-baseball-ball:before {
      content: "\f433"
    }

    .fa-basketball-ball:before {
      content: "\f434"
    }

    .fa-bath:before {
      content: "\f2cd"
    }

    .fa-battery-empty:before {
      content: "\f244"
    }

    .fa-battery-full:before {
      content: "\f240"
    }

    .fa-battery-half:before {
      content: "\f242"
    }

    .fa-battery-quarter:before {
      content: "\f243"
    }

    .fa-battery-three-quarters:before {
      content: "\f241"
    }

    .fa-battle-net:before {
      content: "\f835"
    }

    .fa-bed:before {
      content: "\f236"
    }

    .fa-beer:before {
      content: "\f0fc"
    }

    .fa-behance:before {
      content: "\f1b4"
    }

    .fa-behance-square:before {
      content: "\f1b5"
    }

    .fa-bell:before {
      content: "\f0f3"
    }

    .fa-bell-slash:before {
      content: "\f1f6"
    }

    .fa-bezier-curve:before {
      content: "\f55b"
    }

    .fa-bible:before {
      content: "\f647"
    }

    .fa-bicycle:before {
      content: "\f206"
    }

    .fa-biking:before {
      content: "\f84a"
    }

    .fa-bimobject:before {
      content: "\f378"
    }

    .fa-binoculars:before {
      content: "\f1e5"
    }

    .fa-biohazard:before {
      content: "\f780"
    }

    .fa-birthday-cake:before {
      content: "\f1fd"
    }

    .fa-bitbucket:before {
      content: "\f171"
    }

    .fa-bitcoin:before {
      content: "\f379"
    }

    .fa-bity:before {
      content: "\f37a"
    }

    .fa-black-tie:before {
      content: "\f27e"
    }

    .fa-blackberry:before {
      content: "\f37b"
    }

    .fa-blender:before {
      content: "\f517"
    }

    .fa-blender-phone:before {
      content: "\f6b6"
    }

    .fa-blind:before {
      content: "\f29d"
    }

    .fa-blog:before {
      content: "\f781"
    }

    .fa-blogger:before {
      content: "\f37c"
    }

    .fa-blogger-b:before {
      content: "\f37d"
    }

    .fa-bluetooth:before {
      content: "\f293"
    }

    .fa-bluetooth-b:before {
      content: "\f294"
    }

    .fa-bold:before {
      content: "\f032"
    }

    .fa-bolt:before {
      content: "\f0e7"
    }

    .fa-bomb:before {
      content: "\f1e2"
    }

    .fa-bone:before {
      content: "\f5d7"
    }

    .fa-bong:before {
      content: "\f55c"
    }

    .fa-book:before {
      content: "\f02d"
    }

    .fa-book-dead:before {
      content: "\f6b7"
    }

    .fa-book-medical:before {
      content: "\f7e6"
    }

    .fa-book-open:before {
      content: "\f518"
    }

    .fa-book-reader:before {
      content: "\f5da"
    }

    .fa-bookmark:before {
      content: "\f02e"
    }

    .fa-bootstrap:before {
      content: "\f836"
    }

    .fa-border-all:before {
      content: "\f84c"
    }

    .fa-border-none:before {
      content: "\f850"
    }

    .fa-border-style:before {
      content: "\f853"
    }

    .fa-bowling-ball:before {
      content: "\f436"
    }

    .fa-box:before {
      content: "\f466"
    }

    .fa-box-open:before {
      content: "\f49e"
    }

    .fa-boxes:before {
      content: "\f468"
    }

    .fa-braille:before {
      content: "\f2a1"
    }

    .fa-brain:before {
      content: "\f5dc"
    }

    .fa-bread-slice:before {
      content: "\f7ec"
    }

    .fa-briefcase:before {
      content: "\f0b1"
    }

    .fa-briefcase-medical:before {
      content: "\f469"
    }

    .fa-broadcast-tower:before {
      content: "\f519"
    }

    .fa-broom:before {
      content: "\f51a"
    }

    .fa-brush:before {
      content: "\f55d"
    }

    .fa-btc:before {
      content: "\f15a"
    }

    .fa-buffer:before {
      content: "\f837"
    }

    .fa-bug:before {
      content: "\f188"
    }

    .fa-building:before {
      content: "\f1ad"
    }

    .fa-bullhorn:before {
      content: "\f0a1"
    }

    .fa-bullseye:before {
      content: "\f140"
    }

    .fa-burn:before {
      content: "\f46a"
    }

    .fa-buromobelexperte:before {
      content: "\f37f"
    }

    .fa-bus:before {
      content: "\f207"
    }

    .fa-bus-alt:before {
      content: "\f55e"
    }

    .fa-business-time:before {
      content: "\f64a"
    }

    .fa-buy-n-large:before {
      content: "\f8a6"
    }

    .fa-buysellads:before {
      content: "\f20d"
    }

    .fa-calculator:before {
      content: "\f1ec"
    }

    .fa-calendar:before {
      content: "\f133"
    }

    .fa-calendar-alt:before {
      content: "\f073"
    }

    .fa-calendar-check:before {
      content: "\f274"
    }

    .fa-calendar-day:before {
      content: "\f783"
    }

    .fa-calendar-minus:before {
      content: "\f272"
    }

    .fa-calendar-plus:before {
      content: "\f271"
    }

    .fa-calendar-times:before {
      content: "\f273"
    }

    .fa-calendar-week:before {
      content: "\f784"
    }

    .fa-camera:before {
      content: "\f030"
    }

    .fa-camera-retro:before {
      content: "\f083"
    }

    .fa-campground:before {
      content: "\f6bb"
    }

    .fa-canadian-maple-leaf:before {
      content: "\f785"
    }

    .fa-candy-cane:before {
      content: "\f786"
    }

    .fa-cannabis:before {
      content: "\f55f"
    }

    .fa-capsules:before {
      content: "\f46b"
    }

    .fa-car:before {
      content: "\f1b9"
    }

    .fa-car-alt:before {
      content: "\f5de"
    }

    .fa-car-battery:before {
      content: "\f5df"
    }

    .fa-car-crash:before {
      content: "\f5e1"
    }

    .fa-car-side:before {
      content: "\f5e4"
    }

    .fa-caravan:before {
      content: "\f8ff"
    }

    .fa-caret-down:before {
      content: "\f0d7"
    }

    .fa-caret-left:before {
      content: "\f0d9"
    }

    .fa-caret-right:before {
      content: "\f0da"
    }

    .fa-caret-square-down:before {
      content: "\f150"
    }

    .fa-caret-square-left:before {
      content: "\f191"
    }

    .fa-caret-square-right:before {
      content: "\f152"
    }

    .fa-caret-square-up:before {
      content: "\f151"
    }

    .fa-caret-up:before {
      content: "\f0d8"
    }

    .fa-carrot:before {
      content: "\f787"
    }

    .fa-cart-arrow-down:before {
      content: "\f218"
    }

    .fa-cart-plus:before {
      content: "\f217"
    }

    .fa-cash-register:before {
      content: "\f788"
    }

    .fa-cat:before {
      content: "\f6be"
    }

    .fa-cc-amazon-pay:before {
      content: "\f42d"
    }

    .fa-cc-amex:before {
      content: "\f1f3"
    }

    .fa-cc-apple-pay:before {
      content: "\f416"
    }

    .fa-cc-diners-club:before {
      content: "\f24c"
    }

    .fa-cc-discover:before {
      content: "\f1f2"
    }

    .fa-cc-jcb:before {
      content: "\f24b"
    }

    .fa-cc-mastercard:before {
      content: "\f1f1"
    }

    .fa-cc-paypal:before {
      content: "\f1f4"
    }

    .fa-cc-stripe:before {
      content: "\f1f5"
    }

    .fa-cc-visa:before {
      content: "\f1f0"
    }

    .fa-centercode:before {
      content: "\f380"
    }

    .fa-centos:before {
      content: "\f789"
    }

    .fa-certificate:before {
      content: "\f0a3"
    }

    .fa-chair:before {
      content: "\f6c0"
    }

    .fa-chalkboard:before {
      content: "\f51b"
    }

    .fa-chalkboard-teacher:before {
      content: "\f51c"
    }

    .fa-charging-station:before {
      content: "\f5e7"
    }

    .fa-chart-area:before {
      content: "\f1fe"
    }

    .fa-chart-bar:before {
      content: "\f080"
    }

    .fa-chart-line:before {
      content: "\f201"
    }

    .fa-chart-pie:before {
      content: "\f200"
    }

    .fa-check:before {
      content: "\f00c"
    }

    .fa-check-circle:before {
      content: "\f058"
    }

    .fa-check-double:before {
      content: "\f560"
    }

    .fa-check-square:before {
      content: "\f14a"
    }

    .fa-cheese:before {
      content: "\f7ef"
    }

    .fa-chess:before {
      content: "\f439"
    }

    .fa-chess-bishop:before {
      content: "\f43a"
    }

    .fa-chess-board:before {
      content: "\f43c"
    }

    .fa-chess-king:before {
      content: "\f43f"
    }

    .fa-chess-knight:before {
      content: "\f441"
    }

    .fa-chess-pawn:before {
      content: "\f443"
    }

    .fa-chess-queen:before {
      content: "\f445"
    }

    .fa-chess-rook:before {
      content: "\f447"
    }

    .fa-chevron-circle-down:before {
      content: "\f13a"
    }

    .fa-chevron-circle-left:before {
      content: "\f137"
    }

    .fa-chevron-circle-right:before {
      content: "\f138"
    }

    .fa-chevron-circle-up:before {
      content: "\f139"
    }

    .fa-chevron-down:before {
      content: "\f078"
    }

    .fa-chevron-left:before {
      content: "\f053"
    }

    .fa-chevron-right:before {
      content: "\f054"
    }

    .fa-chevron-up:before {
      content: "\f077"
    }

    .fa-child:before {
      content: "\f1ae"
    }

    .fa-chrome:before {
      content: "\f268"
    }

    .fa-chromecast:before {
      content: "\f838"
    }

    .fa-church:before {
      content: "\f51d"
    }

    .fa-circle:before {
      content: "\f111"
    }

    .fa-circle-notch:before {
      content: "\f1ce"
    }

    .fa-city:before {
      content: "\f64f"
    }

    .fa-clinic-medical:before {
      content: "\f7f2"
    }

    .fa-clipboard:before {
      content: "\f328"
    }

    .fa-clipboard-check:before {
      content: "\f46c"
    }

    .fa-clipboard-list:before {
      content: "\f46d"
    }

    .fa-clock:before {
      content: "\f017"
    }

    .fa-clone:before {
      content: "\f24d"
    }

    .fa-closed-captioning:before {
      content: "\f20a"
    }

    .fa-cloud:before {
      content: "\f0c2"
    }

    .fa-cloud-download-alt:before {
      content: "\f381"
    }

    .fa-cloud-meatball:before {
      content: "\f73b"
    }

    .fa-cloud-moon:before {
      content: "\f6c3"
    }

    .fa-cloud-moon-rain:before {
      content: "\f73c"
    }

    .fa-cloud-rain:before {
      content: "\f73d"
    }

    .fa-cloud-showers-heavy:before {
      content: "\f740"
    }

    .fa-cloud-sun:before {
      content: "\f6c4"
    }

    .fa-cloud-sun-rain:before {
      content: "\f743"
    }

    .fa-cloud-upload-alt:before {
      content: "\f382"
    }

    .fa-cloudscale:before {
      content: "\f383"
    }

    .fa-cloudsmith:before {
      content: "\f384"
    }

    .fa-cloudversify:before {
      content: "\f385"
    }

    .fa-cocktail:before {
      content: "\f561"
    }

    .fa-code:before {
      content: "\f121"
    }

    .fa-code-branch:before {
      content: "\f126"
    }

    .fa-codepen:before {
      content: "\f1cb"
    }

    .fa-codiepie:before {
      content: "\f284"
    }

    .fa-coffee:before {
      content: "\f0f4"
    }

    .fa-cog:before {
      content: "\f013"
    }

    .fa-cogs:before {
      content: "\f085"
    }

    .fa-coins:before {
      content: "\f51e"
    }

    .fa-columns:before {
      content: "\f0db"
    }

    .fa-comment:before {
      content: "\f075"
    }

    .fa-comment-alt:before {
      content: "\f27a"
    }

    .fa-comment-dollar:before {
      content: "\f651"
    }

    .fa-comment-dots:before {
      content: "\f4ad"
    }

    .fa-comment-medical:before {
      content: "\f7f5"
    }

    .fa-comment-slash:before {
      content: "\f4b3"
    }

    .fa-comments:before {
      content: "\f086"
    }

    .fa-comments-dollar:before {
      content: "\f653"
    }

    .fa-compact-disc:before {
      content: "\f51f"
    }

    .fa-compass:before {
      content: "\f14e"
    }

    .fa-compress:before {
      content: "\f066"
    }

    .fa-compress-alt:before {
      content: "\f422"
    }

    .fa-compress-arrows-alt:before {
      content: "\f78c"
    }

    .fa-concierge-bell:before {
      content: "\f562"
    }

    .fa-confluence:before {
      content: "\f78d"
    }

    .fa-connectdevelop:before {
      content: "\f20e"
    }

    .fa-contao:before {
      content: "\f26d"
    }

    .fa-cookie:before {
      content: "\f563"
    }

    .fa-cookie-bite:before {
      content: "\f564"
    }

    .fa-copy:before {
      content: "\f0c5"
    }

    .fa-copyright:before {
      content: "\f1f9"
    }

    .fa-cotton-bureau:before {
      content: "\f89e"
    }

    .fa-couch:before {
      content: "\f4b8"
    }

    .fa-cpanel:before {
      content: "\f388"
    }

    .fa-creative-commons:before {
      content: "\f25e"
    }

    .fa-creative-commons-by:before {
      content: "\f4e7"
    }

    .fa-creative-commons-nc:before {
      content: "\f4e8"
    }

    .fa-creative-commons-nc-eu:before {
      content: "\f4e9"
    }

    .fa-creative-commons-nc-jp:before {
      content: "\f4ea"
    }

    .fa-creative-commons-nd:before {
      content: "\f4eb"
    }

    .fa-creative-commons-pd:before {
      content: "\f4ec"
    }

    .fa-creative-commons-pd-alt:before {
      content: "\f4ed"
    }

    .fa-creative-commons-remix:before {
      content: "\f4ee"
    }

    .fa-creative-commons-sa:before {
      content: "\f4ef"
    }

    .fa-creative-commons-sampling:before {
      content: "\f4f0"
    }

    .fa-creative-commons-sampling-plus:before {
      content: "\f4f1"
    }

    .fa-creative-commons-share:before {
      content: "\f4f2"
    }

    .fa-creative-commons-zero:before {
      content: "\f4f3"
    }

    .fa-credit-card:before {
      content: "\f09d"
    }

    .fa-critical-role:before {
      content: "\f6c9"
    }

    .fa-crop:before {
      content: "\f125"
    }

    .fa-crop-alt:before {
      content: "\f565"
    }

    .fa-cross:before {
      content: "\f654"
    }

    .fa-crosshairs:before {
      content: "\f05b"
    }

    .fa-crow:before {
      content: "\f520"
    }

    .fa-crown:before {
      content: "\f521"
    }

    .fa-crutch:before {
      content: "\f7f7"
    }

    .fa-css3:before {
      content: "\f13c"
    }

    .fa-css3-alt:before {
      content: "\f38b"
    }

    .fa-cube:before {
      content: "\f1b2"
    }

    .fa-cubes:before {
      content: "\f1b3"
    }

    .fa-cut:before {
      content: "\f0c4"
    }

    .fa-cuttlefish:before {
      content: "\f38c"
    }

    .fa-d-and-d:before {
      content: "\f38d"
    }

    .fa-d-and-d-beyond:before {
      content: "\f6ca"
    }

    .fa-dashcube:before {
      content: "\f210"
    }

    .fa-database:before {
      content: "\f1c0"
    }

    .fa-deaf:before {
      content: "\f2a4"
    }

    .fa-delicious:before {
      content: "\f1a5"
    }

    .fa-democrat:before {
      content: "\f747"
    }

    .fa-deploydog:before {
      content: "\f38e"
    }

    .fa-deskpro:before {
      content: "\f38f"
    }

    .fa-desktop:before {
      content: "\f108"
    }

    .fa-dev:before {
      content: "\f6cc"
    }

    .fa-deviantart:before {
      content: "\f1bd"
    }

    .fa-dharmachakra:before {
      content: "\f655"
    }

    .fa-dhl:before {
      content: "\f790"
    }

    .fa-diagnoses:before {
      content: "\f470"
    }

    .fa-diaspora:before {
      content: "\f791"
    }

    .fa-dice:before {
      content: "\f522"
    }

    .fa-dice-d20:before {
      content: "\f6cf"
    }

    .fa-dice-d6:before {
      content: "\f6d1"
    }

    .fa-dice-five:before {
      content: "\f523"
    }

    .fa-dice-four:before {
      content: "\f524"
    }

    .fa-dice-one:before {
      content: "\f525"
    }

    .fa-dice-six:before {
      content: "\f526"
    }

    .fa-dice-three:before {
      content: "\f527"
    }

    .fa-dice-two:before {
      content: "\f528"
    }

    .fa-digg:before {
      content: "\f1a6"
    }

    .fa-digital-ocean:before {
      content: "\f391"
    }

    .fa-digital-tachograph:before {
      content: "\f566"
    }

    .fa-directions:before {
      content: "\f5eb"
    }

    .fa-discord:before {
      content: "\f392"
    }

    .fa-discourse:before {
      content: "\f393"
    }

    .fa-divide:before {
      content: "\f529"
    }

    .fa-dizzy:before {
      content: "\f567"
    }

    .fa-dna:before {
      content: "\f471"
    }

    .fa-dochub:before {
      content: "\f394"
    }

    .fa-docker:before {
      content: "\f395"
    }

    .fa-dog:before {
      content: "\f6d3"
    }

    .fa-dollar-sign:before {
      content: "\f155"
    }

    .fa-dolly:before {
      content: "\f472"
    }

    .fa-dolly-flatbed:before {
      content: "\f474"
    }

    .fa-donate:before {
      content: "\f4b9"
    }

    .fa-door-closed:before {
      content: "\f52a"
    }

    .fa-door-open:before {
      content: "\f52b"
    }

    .fa-dot-circle:before {
      content: "\f192"
    }

    .fa-dove:before {
      content: "\f4ba"
    }

    .fa-download:before {
      content: "\f019"
    }

    .fa-draft2digital:before {
      content: "\f396"
    }

    .fa-drafting-compass:before {
      content: "\f568"
    }

    .fa-dragon:before {
      content: "\f6d5"
    }

    .fa-draw-polygon:before {
      content: "\f5ee"
    }

    .fa-dribbble:before {
      content: "\f17d"
    }

    .fa-dribbble-square:before {
      content: "\f397"
    }

    .fa-dropbox:before {
      content: "\f16b"
    }

    .fa-drum:before {
      content: "\f569"
    }

    .fa-drum-steelpan:before {
      content: "\f56a"
    }

    .fa-drumstick-bite:before {
      content: "\f6d7"
    }

    .fa-drupal:before {
      content: "\f1a9"
    }

    .fa-dumbbell:before {
      content: "\f44b"
    }

    .fa-dumpster:before {
      content: "\f793"
    }

    .fa-dumpster-fire:before {
      content: "\f794"
    }

    .fa-dungeon:before {
      content: "\f6d9"
    }

    .fa-dyalog:before {
      content: "\f399"
    }

    .fa-earlybirds:before {
      content: "\f39a"
    }

    .fa-ebay:before {
      content: "\f4f4"
    }

    .fa-edge:before {
      content: "\f282"
    }

    .fa-edit:before {
      content: "\f044"
    }

    .fa-egg:before {
      content: "\f7fb"
    }

    .fa-eject:before {
      content: "\f052"
    }

    .fa-elementor:before {
      content: "\f430"
    }

    .fa-ellipsis-h:before {
      content: "\f141"
    }

    .fa-ellipsis-v:before {
      content: "\f142"
    }

    .fa-ello:before {
      content: "\f5f1"
    }

    .fa-ember:before {
      content: "\f423"
    }

    .fa-empire:before {
      content: "\f1d1"
    }

    .fa-envelope:before {
      content: "\f0e0"
    }

    .fa-envelope-open:before {
      content: "\f2b6"
    }

    .fa-envelope-open-text:before {
      content: "\f658"
    }

    .fa-envelope-square:before {
      content: "\f199"
    }

    .fa-envira:before {
      content: "\f299"
    }

    .fa-equals:before {
      content: "\f52c"
    }

    .fa-eraser:before {
      content: "\f12d"
    }

    .fa-erlang:before {
      content: "\f39d"
    }

    .fa-ethereum:before {
      content: "\f42e"
    }

    .fa-ethernet:before {
      content: "\f796"
    }

    .fa-etsy:before {
      content: "\f2d7"
    }

    .fa-euro-sign:before {
      content: "\f153"
    }

    .fa-evernote:before {
      content: "\f839"
    }

    .fa-exchange-alt:before {
      content: "\f362"
    }

    .fa-exclamation:before {
      content: "\f12a"
    }

    .fa-exclamation-circle:before {
      content: "\f06a"
    }

    .fa-exclamation-triangle:before {
      content: "\f071"
    }

    .fa-expand:before {
      content: "\f065"
    }

    .fa-expand-alt:before {
      content: "\f424"
    }

    .fa-expand-arrows-alt:before {
      content: "\f31e"
    }

    .fa-expeditedssl:before {
      content: "\f23e"
    }

    .fa-external-link-alt:before {
      content: "\f35d"
    }

    .fa-external-link-square-alt:before {
      content: "\f360"
    }

    .fa-eye:before {
      content: "\f06e"
    }

    .fa-eye-dropper:before {
      content: "\f1fb"
    }

    .fa-eye-slash:before {
      content: "\f070"
    }

    .fa-facebook:before {
      content: "\f09a"
    }

    .fa-facebook-f:before {
      content: "\f39e"
    }

    .fa-facebook-messenger:before {
      content: "\f39f"
    }

    .fa-facebook-square:before {
      content: "\f082"
    }

    .fa-fan:before {
      content: "\f863"
    }

    .fa-fantasy-flight-games:before {
      content: "\f6dc"
    }

    .fa-fast-backward:before {
      content: "\f049"
    }

    .fa-fast-forward:before {
      content: "\f050"
    }

    .fa-fax:before {
      content: "\f1ac"
    }

    .fa-feather:before {
      content: "\f52d"
    }

    .fa-feather-alt:before {
      content: "\f56b"
    }

    .fa-fedex:before {
      content: "\f797"
    }

    .fa-fedora:before {
      content: "\f798"
    }

    .fa-female:before {
      content: "\f182"
    }

    .fa-fighter-jet:before {
      content: "\f0fb"
    }

    .fa-figma:before {
      content: "\f799"
    }

    .fa-file:before {
      content: "\f15b"
    }

    .fa-file-alt:before {
      content: "\f15c"
    }

    .fa-file-archive:before {
      content: "\f1c6"
    }

    .fa-file-audio:before {
      content: "\f1c7"
    }

    .fa-file-code:before {
      content: "\f1c9"
    }

    .fa-file-contract:before {
      content: "\f56c"
    }

    .fa-file-csv:before {
      content: "\f6dd"
    }

    .fa-file-download:before {
      content: "\f56d"
    }

    .fa-file-excel:before {
      content: "\f1c3"
    }

    .fa-file-export:before {
      content: "\f56e"
    }

    .fa-file-image:before {
      content: "\f1c5"
    }

    .fa-file-import:before {
      content: "\f56f"
    }

    .fa-file-invoice:before {
      content: "\f570"
    }

    .fa-file-invoice-dollar:before {
      content: "\f571"
    }

    .fa-file-medical:before {
      content: "\f477"
    }

    .fa-file-medical-alt:before {
      content: "\f478"
    }

    .fa-file-pdf:before {
      content: "\f1c1"
    }

    .fa-file-powerpoint:before {
      content: "\f1c4"
    }

    .fa-file-prescription:before {
      content: "\f572"
    }

    .fa-file-signature:before {
      content: "\f573"
    }

    .fa-file-upload:before {
      content: "\f574"
    }

    .fa-file-video:before {
      content: "\f1c8"
    }

    .fa-file-word:before {
      content: "\f1c2"
    }

    .fa-fill:before {
      content: "\f575"
    }

    .fa-fill-drip:before {
      content: "\f576"
    }

    .fa-film:before {
      content: "\f008"
    }

    .fa-filter:before {
      content: "\f0b0"
    }

    .fa-fingerprint:before {
      content: "\f577"
    }

    .fa-fire:before {
      content: "\f06d"
    }

    .fa-fire-alt:before {
      content: "\f7e4"
    }

    .fa-fire-extinguisher:before {
      content: "\f134"
    }

    .fa-firefox:before {
      content: "\f269"
    }

    .fa-firefox-browser:before {
      content: "\f907"
    }

    .fa-first-aid:before {
      content: "\f479"
    }

    .fa-first-order:before {
      content: "\f2b0"
    }

    .fa-first-order-alt:before {
      content: "\f50a"
    }

    .fa-firstdraft:before {
      content: "\f3a1"
    }

    .fa-fish:before {
      content: "\f578"
    }

    .fa-fist-raised:before {
      content: "\f6de"
    }

    .fa-flag:before {
      content: "\f024"
    }

    .fa-flag-checkered:before {
      content: "\f11e"
    }

    .fa-flag-usa:before {
      content: "\f74d"
    }

    .fa-flask:before {
      content: "\f0c3"
    }

    .fa-flickr:before {
      content: "\f16e"
    }

    .fa-flipboard:before {
      content: "\f44d"
    }

    .fa-flushed:before {
      content: "\f579"
    }

    .fa-fly:before {
      content: "\f417"
    }

    .fa-folder:before {
      content: "\f07b"
    }

    .fa-folder-minus:before {
      content: "\f65d"
    }

    .fa-folder-open:before {
      content: "\f07c"
    }

    .fa-folder-plus:before {
      content: "\f65e"
    }

    .fa-font:before {
      content: "\f031"
    }

    .fa-font-awesome:before {
      content: "\f2b4"
    }

    .fa-font-awesome-alt:before {
      content: "\f35c"
    }

    .fa-font-awesome-flag:before {
      content: "\f425"
    }

    .fa-font-awesome-logo-full:before {
      content: "\f4e6"
    }

    .fa-fonticons:before {
      content: "\f280"
    }

    .fa-fonticons-fi:before {
      content: "\f3a2"
    }

    .fa-football-ball:before {
      content: "\f44e"
    }

    .fa-fort-awesome:before {
      content: "\f286"
    }

    .fa-fort-awesome-alt:before {
      content: "\f3a3"
    }

    .fa-forumbee:before {
      content: "\f211"
    }

    .fa-forward:before {
      content: "\f04e"
    }

    .fa-foursquare:before {
      content: "\f180"
    }

    .fa-free-code-camp:before {
      content: "\f2c5"
    }

    .fa-freebsd:before {
      content: "\f3a4"
    }

    .fa-frog:before {
      content: "\f52e"
    }

    .fa-frown:before {
      content: "\f119"
    }

    .fa-frown-open:before {
      content: "\f57a"
    }

    .fa-fulcrum:before {
      content: "\f50b"
    }

    .fa-funnel-dollar:before {
      content: "\f662"
    }

    .fa-futbol:before {
      content: "\f1e3"
    }

    .fa-galactic-republic:before {
      content: "\f50c"
    }

    .fa-galactic-senate:before {
      content: "\f50d"
    }

    .fa-gamepad:before {
      content: "\f11b"
    }

    .fa-gas-pump:before {
      content: "\f52f"
    }

    .fa-gavel:before {
      content: "\f0e3"
    }

    .fa-gem:before {
      content: "\f3a5"
    }

    .fa-genderless:before {
      content: "\f22d"
    }

    .fa-get-pocket:before {
      content: "\f265"
    }

    .fa-gg:before {
      content: "\f260"
    }

    .fa-gg-circle:before {
      content: "\f261"
    }

    .fa-ghost:before {
      content: "\f6e2"
    }

    .fa-gift:before {
      content: "\f06b"
    }

    .fa-gifts:before {
      content: "\f79c"
    }

    .fa-git:before {
      content: "\f1d3"
    }

    .fa-git-alt:before {
      content: "\f841"
    }

    .fa-git-square:before {
      content: "\f1d2"
    }

    .fa-github:before {
      content: "\f09b"
    }

    .fa-github-alt:before {
      content: "\f113"
    }

    .fa-github-square:before {
      content: "\f092"
    }

    .fa-gitkraken:before {
      content: "\f3a6"
    }

    .fa-gitlab:before {
      content: "\f296"
    }

    .fa-gitter:before {
      content: "\f426"
    }

    .fa-glass-cheers:before {
      content: "\f79f"
    }

    .fa-glass-martini:before {
      content: "\f000"
    }

    .fa-glass-martini-alt:before {
      content: "\f57b"
    }

    .fa-glass-whiskey:before {
      content: "\f7a0"
    }

    .fa-glasses:before {
      content: "\f530"
    }

    .fa-glide:before {
      content: "\f2a5"
    }

    .fa-glide-g:before {
      content: "\f2a6"
    }

    .fa-globe:before {
      content: "\f0ac"
    }

    .fa-globe-africa:before {
      content: "\f57c"
    }

    .fa-globe-americas:before {
      content: "\f57d"
    }

    .fa-globe-asia:before {
      content: "\f57e"
    }

    .fa-globe-europe:before {
      content: "\f7a2"
    }

    .fa-gofore:before {
      content: "\f3a7"
    }

    .fa-golf-ball:before {
      content: "\f450"
    }

    .fa-goodreads:before {
      content: "\f3a8"
    }

    .fa-goodreads-g:before {
      content: "\f3a9"
    }

    .fa-google:before {
      content: "\f1a0"
    }

    .fa-google-drive:before {
      content: "\f3aa"
    }

    .fa-google-play:before {
      content: "\f3ab"
    }

    .fa-google-plus:before {
      content: "\f2b3"
    }

    .fa-google-plus-g:before {
      content: "\f0d5"
    }

    .fa-google-plus-square:before {
      content: "\f0d4"
    }

    .fa-google-wallet:before {
      content: "\f1ee"
    }

    .fa-gopuram:before {
      content: "\f664"
    }

    .fa-graduation-cap:before {
      content: "\f19d"
    }

    .fa-gratipay:before {
      content: "\f184"
    }

    .fa-grav:before {
      content: "\f2d6"
    }

    .fa-greater-than:before {
      content: "\f531"
    }

    .fa-greater-than-equal:before {
      content: "\f532"
    }

    .fa-grimace:before {
      content: "\f57f"
    }

    .fa-grin:before {
      content: "\f580"
    }

    .fa-grin-alt:before {
      content: "\f581"
    }

    .fa-grin-beam:before {
      content: "\f582"
    }

    .fa-grin-beam-sweat:before {
      content: "\f583"
    }

    .fa-grin-hearts:before {
      content: "\f584"
    }

    .fa-grin-squint:before {
      content: "\f585"
    }

    .fa-grin-squint-tears:before {
      content: "\f586"
    }

    .fa-grin-stars:before {
      content: "\f587"
    }

    .fa-grin-tears:before {
      content: "\f588"
    }

    .fa-grin-tongue:before {
      content: "\f589"
    }

    .fa-grin-tongue-squint:before {
      content: "\f58a"
    }

    .fa-grin-tongue-wink:before {
      content: "\f58b"
    }

    .fa-grin-wink:before {
      content: "\f58c"
    }

    .fa-grip-horizontal:before {
      content: "\f58d"
    }

    .fa-grip-lines:before {
      content: "\f7a4"
    }

    .fa-grip-lines-vertical:before {
      content: "\f7a5"
    }

    .fa-grip-vertical:before {
      content: "\f58e"
    }

    .fa-gripfire:before {
      content: "\f3ac"
    }

    .fa-grunt:before {
      content: "\f3ad"
    }

    .fa-guitar:before {
      content: "\f7a6"
    }

    .fa-gulp:before {
      content: "\f3ae"
    }

    .fa-h-square:before {
      content: "\f0fd"
    }

    .fa-hacker-news:before {
      content: "\f1d4"
    }

    .fa-hacker-news-square:before {
      content: "\f3af"
    }

    .fa-hackerrank:before {
      content: "\f5f7"
    }

    .fa-hamburger:before {
      content: "\f805"
    }

    .fa-hammer:before {
      content: "\f6e3"
    }

    .fa-hamsa:before {
      content: "\f665"
    }

    .fa-hand-holding:before {
      content: "\f4bd"
    }

    .fa-hand-holding-heart:before {
      content: "\f4be"
    }

    .fa-hand-holding-usd:before {
      content: "\f4c0"
    }

    .fa-hand-lizard:before {
      content: "\f258"
    }

    .fa-hand-middle-finger:before {
      content: "\f806"
    }

    .fa-hand-paper:before {
      content: "\f256"
    }

    .fa-hand-peace:before {
      content: "\f25b"
    }

    .fa-hand-point-down:before {
      content: "\f0a7"
    }

    .fa-hand-point-left:before {
      content: "\f0a5"
    }

    .fa-hand-point-right:before {
      content: "\f0a4"
    }

    .fa-hand-point-up:before {
      content: "\f0a6"
    }

    .fa-hand-pointer:before {
      content: "\f25a"
    }

    .fa-hand-rock:before {
      content: "\f255"
    }

    .fa-hand-scissors:before {
      content: "\f257"
    }

    .fa-hand-spock:before {
      content: "\f259"
    }

    .fa-hands:before {
      content: "\f4c2"
    }

    .fa-hands-helping:before {
      content: "\f4c4"
    }

    .fa-handshake:before {
      content: "\f2b5"
    }

    .fa-hanukiah:before {
      content: "\f6e6"
    }

    .fa-hard-hat:before {
      content: "\f807"
    }

    .fa-hashtag:before {
      content: "\f292"
    }

    .fa-hat-cowboy:before {
      content: "\f8c0"
    }

    .fa-hat-cowboy-side:before {
      content: "\f8c1"
    }

    .fa-hat-wizard:before {
      content: "\f6e8"
    }

    .fa-hdd:before {
      content: "\f0a0"
    }

    .fa-heading:before {
      content: "\f1dc"
    }

    .fa-headphones:before {
      content: "\f025"
    }

    .fa-headphones-alt:before {
      content: "\f58f"
    }

    .fa-headset:before {
      content: "\f590"
    }

    .fa-heart:before {
      content: "\f004"
    }

    .fa-heart-broken:before {
      content: "\f7a9"
    }

    .fa-heartbeat:before {
      content: "\f21e"
    }

    .fa-helicopter:before {
      content: "\f533"
    }

    .fa-highlighter:before {
      content: "\f591"
    }

    .fa-hiking:before {
      content: "\f6ec"
    }

    .fa-hippo:before {
      content: "\f6ed"
    }

    .fa-hips:before {
      content: "\f452"
    }

    .fa-hire-a-helper:before {
      content: "\f3b0"
    }

    .fa-history:before {
      content: "\f1da"
    }

    .fa-hockey-puck:before {
      content: "\f453"
    }

    .fa-holly-berry:before {
      content: "\f7aa"
    }

    .fa-home:before {
      content: "\f015"
    }

    .fa-hooli:before {
      content: "\f427"
    }

    .fa-hornbill:before {
      content: "\f592"
    }

    .fa-horse:before {
      content: "\f6f0"
    }

    .fa-horse-head:before {
      content: "\f7ab"
    }

    .fa-hospital:before {
      content: "\f0f8"
    }

    .fa-hospital-alt:before {
      content: "\f47d"
    }

    .fa-hospital-symbol:before {
      content: "\f47e"
    }

    .fa-hot-tub:before {
      content: "\f593"
    }

    .fa-hotdog:before {
      content: "\f80f"
    }

    .fa-hotel:before {
      content: "\f594"
    }

    .fa-hotjar:before {
      content: "\f3b1"
    }

    .fa-hourglass:before {
      content: "\f254"
    }

    .fa-hourglass-end:before {
      content: "\f253"
    }

    .fa-hourglass-half:before {
      content: "\f252"
    }

    .fa-hourglass-start:before {
      content: "\f251"
    }

    .fa-house-damage:before {
      content: "\f6f1"
    }

    .fa-houzz:before {
      content: "\f27c"
    }

    .fa-hryvnia:before {
      content: "\f6f2"
    }

    .fa-html5:before {
      content: "\f13b"
    }

    .fa-hubspot:before {
      content: "\f3b2"
    }

    .fa-i-cursor:before {
      content: "\f246"
    }

    .fa-ice-cream:before {
      content: "\f810"
    }

    .fa-icicles:before {
      content: "\f7ad"
    }

    .fa-icons:before {
      content: "\f86d"
    }

    .fa-id-badge:before {
      content: "\f2c1"
    }

    .fa-id-card:before {
      content: "\f2c2"
    }

    .fa-id-card-alt:before {
      content: "\f47f"
    }

    .fa-ideal:before {
      content: "\f913"
    }

    .fa-igloo:before {
      content: "\f7ae"
    }

    .fa-image:before {
      content: "\f03e"
    }

    .fa-images:before {
      content: "\f302"
    }

    .fa-imdb:before {
      content: "\f2d8"
    }

    .fa-inbox:before {
      content: "\f01c"
    }

    .fa-indent:before {
      content: "\f03c"
    }

    .fa-industry:before {
      content: "\f275"
    }

    .fa-infinity:before {
      content: "\f534"
    }

    .fa-info:before {
      content: "\f129"
    }

    .fa-info-circle:before {
      content: "\f05a"
    }

    .fa-instagram:before {
      content: "\f16d"
    }

    .fa-intercom:before {
      content: "\f7af"
    }

    .fa-internet-explorer:before {
      content: "\f26b"
    }

    .fa-invision:before {
      content: "\f7b0"
    }

    .fa-ioxhost:before {
      content: "\f208"
    }

    .fa-italic:before {
      content: "\f033"
    }

    .fa-itch-io:before {
      content: "\f83a"
    }

    .fa-itunes:before {
      content: "\f3b4"
    }

    .fa-itunes-note:before {
      content: "\f3b5"
    }

    .fa-java:before {
      content: "\f4e4"
    }

    .fa-jedi:before {
      content: "\f669"
    }

    .fa-jedi-order:before {
      content: "\f50e"
    }

    .fa-jenkins:before {
      content: "\f3b6"
    }

    .fa-jira:before {
      content: "\f7b1"
    }

    .fa-joget:before {
      content: "\f3b7"
    }

    .fa-joint:before {
      content: "\f595"
    }

    .fa-joomla:before {
      content: "\f1aa"
    }

    .fa-journal-whills:before {
      content: "\f66a"
    }

    .fa-js:before {
      content: "\f3b8"
    }

    .fa-js-square:before {
      content: "\f3b9"
    }

    .fa-jsfiddle:before {
      content: "\f1cc"
    }

    .fa-kaaba:before {
      content: "\f66b"
    }

    .fa-kaggle:before {
      content: "\f5fa"
    }

    .fa-key:before {
      content: "\f084"
    }

    .fa-keybase:before {
      content: "\f4f5"
    }

    .fa-keyboard:before {
      content: "\f11c"
    }

    .fa-keycdn:before {
      content: "\f3ba"
    }

    .fa-khanda:before {
      content: "\f66d"
    }

    .fa-kickstarter:before {
      content: "\f3bb"
    }

    .fa-kickstarter-k:before {
      content: "\f3bc"
    }

    .fa-kiss:before {
      content: "\f596"
    }

    .fa-kiss-beam:before {
      content: "\f597"
    }

    .fa-kiss-wink-heart:before {
      content: "\f598"
    }

    .fa-kiwi-bird:before {
      content: "\f535"
    }

    .fa-korvue:before {
      content: "\f42f"
    }

    .fa-landmark:before {
      content: "\f66f"
    }

    .fa-language:before {
      content: "\f1ab"
    }

    .fa-laptop:before {
      content: "\f109"
    }

    .fa-laptop-code:before {
      content: "\f5fc"
    }

    .fa-laptop-medical:before {
      content: "\f812"
    }

    .fa-laravel:before {
      content: "\f3bd"
    }

    .fa-lastfm:before {
      content: "\f202"
    }

    .fa-lastfm-square:before {
      content: "\f203"
    }

    .fa-laugh:before {
      content: "\f599"
    }

    .fa-laugh-beam:before {
      content: "\f59a"
    }

    .fa-laugh-squint:before {
      content: "\f59b"
    }

    .fa-laugh-wink:before {
      content: "\f59c"
    }

    .fa-layer-group:before {
      content: "\f5fd"
    }

    .fa-leaf:before {
      content: "\f06c"
    }

    .fa-leanpub:before {
      content: "\f212"
    }

    .fa-lemon:before {
      content: "\f094"
    }

    .fa-less:before {
      content: "\f41d"
    }

    .fa-less-than:before {
      content: "\f536"
    }

    .fa-less-than-equal:before {
      content: "\f537"
    }

    .fa-level-down-alt:before {
      content: "\f3be"
    }

    .fa-level-up-alt:before {
      content: "\f3bf"
    }

    .fa-life-ring:before {
      content: "\f1cd"
    }

    .fa-lightbulb:before {
      content: "\f0eb"
    }

    .fa-line:before {
      content: "\f3c0"
    }

    .fa-link:before {
      content: "\f0c1"
    }

    .fa-linkedin:before {
      content: "\f08c"
    }

    .fa-linkedin-in:before {
      content: "\f0e1"
    }

    .fa-linode:before {
      content: "\f2b8"
    }

    .fa-linux:before {
      content: "\f17c"
    }

    .fa-lira-sign:before {
      content: "\f195"
    }

    .fa-list:before {
      content: "\f03a"
    }

    .fa-list-alt:before {
      content: "\f022"
    }

    .fa-list-ol:before {
      content: "\f0cb"
    }

    .fa-list-ul:before {
      content: "\f0ca"
    }

    .fa-location-arrow:before {
      content: "\f124"
    }

    .fa-lock:before {
      content: "\f023"
    }

    .fa-lock-open:before {
      content: "\f3c1"
    }

    .fa-long-arrow-alt-down:before {
      content: "\f309"
    }

    .fa-long-arrow-alt-left:before {
      content: "\f30a"
    }

    .fa-long-arrow-alt-right:before {
      content: "\f30b"
    }

    .fa-long-arrow-alt-up:before {
      content: "\f30c"
    }

    .fa-low-vision:before {
      content: "\f2a8"
    }

    .fa-luggage-cart:before {
      content: "\f59d"
    }

    .fa-lyft:before {
      content: "\f3c3"
    }

    .fa-magento:before {
      content: "\f3c4"
    }

    .fa-magic:before {
      content: "\f0d0"
    }

    .fa-magnet:before {
      content: "\f076"
    }

    .fa-mail-bulk:before {
      content: "\f674"
    }

    .fa-mailchimp:before {
      content: "\f59e"
    }

    .fa-male:before {
      content: "\f183"
    }

    .fa-mandalorian:before {
      content: "\f50f"
    }

    .fa-map:before {
      content: "\f279"
    }

    .fa-map-marked:before {
      content: "\f59f"
    }

    .fa-map-marked-alt:before {
      content: "\f5a0"
    }

    .fa-map-marker:before {
      content: "\f041"
    }

    .fa-map-marker-alt:before {
      content: "\f3c5"
    }

    .fa-map-pin:before {
      content: "\f276"
    }

    .fa-map-signs:before {
      content: "\f277"
    }

    .fa-markdown:before {
      content: "\f60f"
    }

    .fa-marker:before {
      content: "\f5a1"
    }

    .fa-mars:before {
      content: "\f222"
    }

    .fa-mars-double:before {
      content: "\f227"
    }

    .fa-mars-stroke:before {
      content: "\f229"
    }

    .fa-mars-stroke-h:before {
      content: "\f22b"
    }

    .fa-mars-stroke-v:before {
      content: "\f22a"
    }

    .fa-mask:before {
      content: "\f6fa"
    }

    .fa-mastodon:before {
      content: "\f4f6"
    }

    .fa-maxcdn:before {
      content: "\f136"
    }

    .fa-mdb:before {
      content: "\f8ca"
    }

    .fa-medal:before {
      content: "\f5a2"
    }

    .fa-medapps:before {
      content: "\f3c6"
    }

    .fa-medium:before {
      content: "\f23a"
    }

    .fa-medium-m:before {
      content: "\f3c7"
    }

    .fa-medkit:before {
      content: "\f0fa"
    }

    .fa-medrt:before {
      content: "\f3c8"
    }

    .fa-meetup:before {
      content: "\f2e0"
    }

    .fa-megaport:before {
      content: "\f5a3"
    }

    .fa-meh:before {
      content: "\f11a"
    }

    .fa-meh-blank:before {
      content: "\f5a4"
    }

    .fa-meh-rolling-eyes:before {
      content: "\f5a5"
    }

    .fa-memory:before {
      content: "\f538"
    }

    .fa-mendeley:before {
      content: "\f7b3"
    }

    .fa-menorah:before {
      content: "\f676"
    }

    .fa-mercury:before {
      content: "\f223"
    }

    .fa-meteor:before {
      content: "\f753"
    }

    .fa-microblog:before {
      content: "\f91a"
    }

    .fa-microchip:before {
      content: "\f2db"
    }

    .fa-microphone:before {
      content: "\f130"
    }

    .fa-microphone-alt:before {
      content: "\f3c9"
    }

    .fa-microphone-alt-slash:before {
      content: "\f539"
    }

    .fa-microphone-slash:before {
      content: "\f131"
    }

    .fa-microscope:before {
      content: "\f610"
    }

    .fa-microsoft:before {
      content: "\f3ca"
    }

    .fa-minus:before {
      content: "\f068"
    }

    .fa-minus-circle:before {
      content: "\f056"
    }

    .fa-minus-square:before {
      content: "\f146"
    }

    .fa-mitten:before {
      content: "\f7b5"
    }

    .fa-mix:before {
      content: "\f3cb"
    }

    .fa-mixcloud:before {
      content: "\f289"
    }

    .fa-mizuni:before {
      content: "\f3cc"
    }

    .fa-mobile:before {
      content: "\f10b"
    }

    .fa-mobile-alt:before {
      content: "\f3cd"
    }

    .fa-modx:before {
      content: "\f285"
    }

    .fa-monero:before {
      content: "\f3d0"
    }

    .fa-money-bill:before {
      content: "\f0d6"
    }

    .fa-money-bill-alt:before {
      content: "\f3d1"
    }

    .fa-money-bill-wave:before {
      content: "\f53a"
    }

    .fa-money-bill-wave-alt:before {
      content: "\f53b"
    }

    .fa-money-check:before {
      content: "\f53c"
    }

    .fa-money-check-alt:before {
      content: "\f53d"
    }

    .fa-monument:before {
      content: "\f5a6"
    }

    .fa-moon:before {
      content: "\f186"
    }

    .fa-mortar-pestle:before {
      content: "\f5a7"
    }

    .fa-mosque:before {
      content: "\f678"
    }

    .fa-motorcycle:before {
      content: "\f21c"
    }

    .fa-mountain:before {
      content: "\f6fc"
    }

    .fa-mouse:before {
      content: "\f8cc"
    }

    .fa-mouse-pointer:before {
      content: "\f245"
    }

    .fa-mug-hot:before {
      content: "\f7b6"
    }

    .fa-music:before {
      content: "\f001"
    }

    .fa-napster:before {
      content: "\f3d2"
    }

    .fa-neos:before {
      content: "\f612"
    }

    .fa-network-wired:before {
      content: "\f6ff"
    }

    .fa-neuter:before {
      content: "\f22c"
    }

    .fa-newspaper:before {
      content: "\f1ea"
    }

    .fa-nimblr:before {
      content: "\f5a8"
    }

    .fa-node:before {
      content: "\f419"
    }

    .fa-node-js:before {
      content: "\f3d3"
    }

    .fa-not-equal:before {
      content: "\f53e"
    }

    .fa-notes-medical:before {
      content: "\f481"
    }

    .fa-npm:before {
      content: "\f3d4"
    }

    .fa-ns8:before {
      content: "\f3d5"
    }

    .fa-nutritionix:before {
      content: "\f3d6"
    }

    .fa-object-group:before {
      content: "\f247"
    }

    .fa-object-ungroup:before {
      content: "\f248"
    }

    .fa-odnoklassniki:before {
      content: "\f263"
    }

    .fa-odnoklassniki-square:before {
      content: "\f264"
    }

    .fa-oil-can:before {
      content: "\f613"
    }

    .fa-old-republic:before {
      content: "\f510"
    }

    .fa-om:before {
      content: "\f679"
    }

    .fa-opencart:before {
      content: "\f23d"
    }

    .fa-openid:before {
      content: "\f19b"
    }

    .fa-opera:before {
      content: "\f26a"
    }

    .fa-optin-monster:before {
      content: "\f23c"
    }

    .fa-orcid:before {
      content: "\f8d2"
    }

    .fa-osi:before {
      content: "\f41a"
    }

    .fa-otter:before {
      content: "\f700"
    }

    .fa-outdent:before {
      content: "\f03b"
    }

    .fa-page4:before {
      content: "\f3d7"
    }

    .fa-pagelines:before {
      content: "\f18c"
    }

    .fa-pager:before {
      content: "\f815"
    }

    .fa-paint-brush:before {
      content: "\f1fc"
    }

    .fa-paint-roller:before {
      content: "\f5aa"
    }

    .fa-palette:before {
      content: "\f53f"
    }

    .fa-palfed:before {
      content: "\f3d8"
    }

    .fa-pallet:before {
      content: "\f482"
    }

    .fa-paper-plane:before {
      content: "\f1d8"
    }

    .fa-paperclip:before {
      content: "\f0c6"
    }

    .fa-parachute-box:before {
      content: "\f4cd"
    }

    .fa-paragraph:before {
      content: "\f1dd"
    }

    .fa-parking:before {
      content: "\f540"
    }

    .fa-passport:before {
      content: "\f5ab"
    }

    .fa-pastafarianism:before {
      content: "\f67b"
    }

    .fa-paste:before {
      content: "\f0ea"
    }

    .fa-patreon:before {
      content: "\f3d9"
    }

    .fa-pause:before {
      content: "\f04c"
    }

    .fa-pause-circle:before {
      content: "\f28b"
    }

    .fa-paw:before {
      content: "\f1b0"
    }

    .fa-paypal:before {
      content: "\f1ed"
    }

    .fa-peace:before {
      content: "\f67c"
    }

    .fa-pen:before {
      content: "\f304"
    }

    .fa-pen-alt:before {
      content: "\f305"
    }

    .fa-pen-fancy:before {
      content: "\f5ac"
    }

    .fa-pen-nib:before {
      content: "\f5ad"
    }

    .fa-pen-square:before {
      content: "\f14b"
    }

    .fa-pencil-alt:before {
      content: "\f303"
    }

    .fa-pencil-ruler:before {
      content: "\f5ae"
    }

    .fa-penny-arcade:before {
      content: "\f704"
    }

    .fa-people-carry:before {
      content: "\f4ce"
    }

    .fa-pepper-hot:before {
      content: "\f816"
    }

    .fa-percent:before {
      content: "\f295"
    }

    .fa-percentage:before {
      content: "\f541"
    }

    .fa-periscope:before {
      content: "\f3da"
    }

    .fa-person-booth:before {
      content: "\f756"
    }

    .fa-phabricator:before {
      content: "\f3db"
    }

    .fa-phoenix-framework:before {
      content: "\f3dc"
    }

    .fa-phoenix-squadron:before {
      content: "\f511"
    }

    .fa-phone:before {
      content: "\f095"
    }

    .fa-phone-alt:before {
      content: "\f879"
    }

    .fa-phone-slash:before {
      content: "\f3dd"
    }

    .fa-phone-square:before {
      content: "\f098"
    }

    .fa-phone-square-alt:before {
      content: "\f87b"
    }

    .fa-phone-volume:before {
      content: "\f2a0"
    }

    .fa-photo-video:before {
      content: "\f87c"
    }

    .fa-php:before {
      content: "\f457"
    }

    .fa-pied-piper:before {
      content: "\f2ae"
    }

    .fa-pied-piper-alt:before {
      content: "\f1a8"
    }

    .fa-pied-piper-hat:before {
      content: "\f4e5"
    }

    .fa-pied-piper-pp:before {
      content: "\f1a7"
    }

    .fa-pied-piper-square:before {
      content: "\f91e"
    }

    .fa-piggy-bank:before {
      content: "\f4d3"
    }

    .fa-pills:before {
      content: "\f484"
    }

    .fa-pinterest:before {
      content: "\f0d2"
    }

    .fa-pinterest-p:before {
      content: "\f231"
    }

    .fa-pinterest-square:before {
      content: "\f0d3"
    }

    .fa-pizza-slice:before {
      content: "\f818"
    }

    .fa-place-of-worship:before {
      content: "\f67f"
    }

    .fa-plane:before {
      content: "\f072"
    }

    .fa-plane-arrival:before {
      content: "\f5af"
    }

    .fa-plane-departure:before {
      content: "\f5b0"
    }

    .fa-play:before {
      content: "\f04b"
    }

    .fa-play-circle:before {
      content: "\f144"
    }

    .fa-playstation:before {
      content: "\f3df"
    }

    .fa-plug:before {
      content: "\f1e6"
    }

    .fa-plus:before {
      content: "\f067"
    }

    .fa-plus-circle:before {
      content: "\f055"
    }

    .fa-plus-square:before {
      content: "\f0fe"
    }

    .fa-podcast:before {
      content: "\f2ce"
    }

    .fa-poll:before {
      content: "\f681"
    }

    .fa-poll-h:before {
      content: "\f682"
    }

    .fa-poo:before {
      content: "\f2fe"
    }

    .fa-poo-storm:before {
      content: "\f75a"
    }

    .fa-poop:before {
      content: "\f619"
    }

    .fa-portrait:before {
      content: "\f3e0"
    }

    .fa-pound-sign:before {
      content: "\f154"
    }

    .fa-power-off:before {
      content: "\f011"
    }

    .fa-pray:before {
      content: "\f683"
    }

    .fa-praying-hands:before {
      content: "\f684"
    }

    .fa-prescription:before {
      content: "\f5b1"
    }

    .fa-prescription-bottle:before {
      content: "\f485"
    }

    .fa-prescription-bottle-alt:before {
      content: "\f486"
    }

    .fa-print:before {
      content: "\f02f"
    }

    .fa-procedures:before {
      content: "\f487"
    }

    .fa-product-hunt:before {
      content: "\f288"
    }

    .fa-project-diagram:before {
      content: "\f542"
    }

    .fa-pushed:before {
      content: "\f3e1"
    }

    .fa-puzzle-piece:before {
      content: "\f12e"
    }

    .fa-python:before {
      content: "\f3e2"
    }

    .fa-qq:before {
      content: "\f1d6"
    }

    .fa-qrcode:before {
      content: "\f029"
    }

    .fa-question:before {
      content: "\f128"
    }

    .fa-question-circle:before {
      content: "\f059"
    }

    .fa-quidditch:before {
      content: "\f458"
    }

    .fa-quinscape:before {
      content: "\f459"
    }

    .fa-quora:before {
      content: "\f2c4"
    }

    .fa-quote-left:before {
      content: "\f10d"
    }

    .fa-quote-right:before {
      content: "\f10e"
    }

    .fa-quran:before {
      content: "\f687"
    }

    .fa-r-project:before {
      content: "\f4f7"
    }

    .fa-radiation:before {
      content: "\f7b9"
    }

    .fa-radiation-alt:before {
      content: "\f7ba"
    }

    .fa-rainbow:before {
      content: "\f75b"
    }

    .fa-random:before {
      content: "\f074"
    }

    .fa-raspberry-pi:before {
      content: "\f7bb"
    }

    .fa-ravelry:before {
      content: "\f2d9"
    }

    .fa-react:before {
      content: "\f41b"
    }

    .fa-reacteurope:before {
      content: "\f75d"
    }

    .fa-readme:before {
      content: "\f4d5"
    }

    .fa-rebel:before {
      content: "\f1d0"
    }

    .fa-receipt:before {
      content: "\f543"
    }

    .fa-record-vinyl:before {
      content: "\f8d9"
    }

    .fa-recycle:before {
      content: "\f1b8"
    }

    .fa-red-river:before {
      content: "\f3e3"
    }

    .fa-reddit:before {
      content: "\f1a1"
    }

    .fa-reddit-alien:before {
      content: "\f281"
    }

    .fa-reddit-square:before {
      content: "\f1a2"
    }

    .fa-redhat:before {
      content: "\f7bc"
    }

    .fa-redo:before {
      content: "\f01e"
    }

    .fa-redo-alt:before {
      content: "\f2f9"
    }

    .fa-registered:before {
      content: "\f25d"
    }

    .fa-remove-format:before {
      content: "\f87d"
    }

    .fa-renren:before {
      content: "\f18b"
    }

    .fa-reply:before {
      content: "\f3e5"
    }

    .fa-reply-all:before {
      content: "\f122"
    }

    .fa-replyd:before {
      content: "\f3e6"
    }

    .fa-republican:before {
      content: "\f75e"
    }

    .fa-researchgate:before {
      content: "\f4f8"
    }

    .fa-resolving:before {
      content: "\f3e7"
    }

    .fa-restroom:before {
      content: "\f7bd"
    }

    .fa-retweet:before {
      content: "\f079"
    }

    .fa-rev:before {
      content: "\f5b2"
    }

    .fa-ribbon:before {
      content: "\f4d6"
    }

    .fa-ring:before {
      content: "\f70b"
    }

    .fa-road:before {
      content: "\f018"
    }

    .fa-robot:before {
      content: "\f544"
    }

    .fa-rocket:before {
      content: "\f135"
    }

    .fa-rocketchat:before {
      content: "\f3e8"
    }

    .fa-rockrms:before {
      content: "\f3e9"
    }

    .fa-route:before {
      content: "\f4d7"
    }

    .fa-rss:before {
      content: "\f09e"
    }

    .fa-rss-square:before {
      content: "\f143"
    }

    .fa-ruble-sign:before {
      content: "\f158"
    }

    .fa-ruler:before {
      content: "\f545"
    }

    .fa-ruler-combined:before {
      content: "\f546"
    }

    .fa-ruler-horizontal:before {
      content: "\f547"
    }

    .fa-ruler-vertical:before {
      content: "\f548"
    }

    .fa-running:before {
      content: "\f70c"
    }

    .fa-rupee-sign:before {
      content: "\f156"
    }

    .fa-sad-cry:before {
      content: "\f5b3"
    }

    .fa-sad-tear:before {
      content: "\f5b4"
    }

    .fa-safari:before {
      content: "\f267"
    }

    .fa-salesforce:before {
      content: "\f83b"
    }

    .fa-sass:before {
      content: "\f41e"
    }

    .fa-satellite:before {
      content: "\f7bf"
    }

    .fa-satellite-dish:before {
      content: "\f7c0"
    }

    .fa-save:before {
      content: "\f0c7"
    }

    .fa-schlix:before {
      content: "\f3ea"
    }

    .fa-school:before {
      content: "\f549"
    }

    .fa-screwdriver:before {
      content: "\f54a"
    }

    .fa-scribd:before {
      content: "\f28a"
    }

    .fa-scroll:before {
      content: "\f70e"
    }

    .fa-sd-card:before {
      content: "\f7c2"
    }

    .fa-search:before {
      content: "\f002"
    }

    .fa-search-dollar:before {
      content: "\f688"
    }

    .fa-search-location:before {
      content: "\f689"
    }

    .fa-search-minus:before {
      content: "\f010"
    }

    .fa-search-plus:before {
      content: "\f00e"
    }

    .fa-searchengin:before {
      content: "\f3eb"
    }

    .fa-seedling:before {
      content: "\f4d8"
    }

    .fa-sellcast:before {
      content: "\f2da"
    }

    .fa-sellsy:before {
      content: "\f213"
    }

    .fa-server:before {
      content: "\f233"
    }

    .fa-servicestack:before {
      content: "\f3ec"
    }

    .fa-shapes:before {
      content: "\f61f"
    }

    .fa-share:before {
      content: "\f064"
    }

    .fa-share-alt:before {
      content: "\f1e0"
    }

    .fa-share-alt-square:before {
      content: "\f1e1"
    }

    .fa-share-square:before {
      content: "\f14d"
    }

    .fa-shekel-sign:before {
      content: "\f20b"
    }

    .fa-shield-alt:before {
      content: "\f3ed"
    }

    .fa-ship:before {
      content: "\f21a"
    }

    .fa-shipping-fast:before {
      content: "\f48b"
    }

    .fa-shirtsinbulk:before {
      content: "\f214"
    }

    .fa-shoe-prints:before {
      content: "\f54b"
    }

    .fa-shopping-bag:before {
      content: "\f290"
    }

    .fa-shopping-basket:before {
      content: "\f291"
    }

    .fa-shopping-cart:before {
      content: "\f07a"
    }

    .fa-shopware:before {
      content: "\f5b5"
    }

    .fa-shower:before {
      content: "\f2cc"
    }

    .fa-shuttle-van:before {
      content: "\f5b6"
    }

    .fa-sign:before {
      content: "\f4d9"
    }

    .fa-sign-in-alt:before {
      content: "\f2f6"
    }

    .fa-sign-language:before {
      content: "\f2a7"
    }

    .fa-sign-out-alt:before {
      content: "\f2f5"
    }

    .fa-signal:before {
      content: "\f012"
    }

    .fa-signature:before {
      content: "\f5b7"
    }

    .fa-sim-card:before {
      content: "\f7c4"
    }

    .fa-simplybuilt:before {
      content: "\f215"
    }

    .fa-sistrix:before {
      content: "\f3ee"
    }

    .fa-sitemap:before {
      content: "\f0e8"
    }

    .fa-sith:before {
      content: "\f512"
    }

    .fa-skating:before {
      content: "\f7c5"
    }

    .fa-sketch:before {
      content: "\f7c6"
    }

    .fa-skiing:before {
      content: "\f7c9"
    }

    .fa-skiing-nordic:before {
      content: "\f7ca"
    }

    .fa-skull:before {
      content: "\f54c"
    }

    .fa-skull-crossbones:before {
      content: "\f714"
    }

    .fa-skyatlas:before {
      content: "\f216"
    }

    .fa-skype:before {
      content: "\f17e"
    }

    .fa-slack:before {
      content: "\f198"
    }

    .fa-slack-hash:before {
      content: "\f3ef"
    }

    .fa-slash:before {
      content: "\f715"
    }

    .fa-sleigh:before {
      content: "\f7cc"
    }

    .fa-sliders-h:before {
      content: "\f1de"
    }

    .fa-slideshare:before {
      content: "\f1e7"
    }

    .fa-smile:before {
      content: "\f118"
    }

    .fa-smile-beam:before {
      content: "\f5b8"
    }

    .fa-smile-wink:before {
      content: "\f4da"
    }

    .fa-smog:before {
      content: "\f75f"
    }

    .fa-smoking:before {
      content: "\f48d"
    }

    .fa-smoking-ban:before {
      content: "\f54d"
    }

    .fa-sms:before {
      content: "\f7cd"
    }

    .fa-snapchat:before {
      content: "\f2ab"
    }

    .fa-snapchat-ghost:before {
      content: "\f2ac"
    }

    .fa-snapchat-square:before {
      content: "\f2ad"
    }

    .fa-snowboarding:before {
      content: "\f7ce"
    }

    .fa-snowflake:before {
      content: "\f2dc"
    }

    .fa-snowman:before {
      content: "\f7d0"
    }

    .fa-snowplow:before {
      content: "\f7d2"
    }

    .fa-socks:before {
      content: "\f696"
    }

    .fa-solar-panel:before {
      content: "\f5ba"
    }

    .fa-sort:before {
      content: "\f0dc"
    }

    .fa-sort-alpha-down:before {
      content: "\f15d"
    }

    .fa-sort-alpha-down-alt:before {
      content: "\f881"
    }

    .fa-sort-alpha-up:before {
      content: "\f15e"
    }

    .fa-sort-alpha-up-alt:before {
      content: "\f882"
    }

    .fa-sort-amount-down:before {
      content: "\f160"
    }

    .fa-sort-amount-down-alt:before {
      content: "\f884"
    }

    .fa-sort-amount-up:before {
      content: "\f161"
    }

    .fa-sort-amount-up-alt:before {
      content: "\f885"
    }

    .fa-sort-down:before {
      content: "\f0dd"
    }

    .fa-sort-numeric-down:before {
      content: "\f162"
    }

    .fa-sort-numeric-down-alt:before {
      content: "\f886"
    }

    .fa-sort-numeric-up:before {
      content: "\f163"
    }

    .fa-sort-numeric-up-alt:before {
      content: "\f887"
    }

    .fa-sort-up:before {
      content: "\f0de"
    }

    .fa-soundcloud:before {
      content: "\f1be"
    }

    .fa-sourcetree:before {
      content: "\f7d3"
    }

    .fa-spa:before {
      content: "\f5bb"
    }

    .fa-space-shuttle:before {
      content: "\f197"
    }

    .fa-speakap:before {
      content: "\f3f3"
    }

    .fa-speaker-deck:before {
      content: "\f83c"
    }

    .fa-spell-check:before {
      content: "\f891"
    }

    .fa-spider:before {
      content: "\f717"
    }

    .fa-spinner:before {
      content: "\f110"
    }

    .fa-splotch:before {
      content: "\f5bc"
    }

    .fa-spotify:before {
      content: "\f1bc"
    }

    .fa-spray-can:before {
      content: "\f5bd"
    }

    .fa-square:before {
      content: "\f0c8"
    }

    .fa-square-full:before {
      content: "\f45c"
    }

    .fa-square-root-alt:before {
      content: "\f698"
    }

    .fa-squarespace:before {
      content: "\f5be"
    }

    .fa-stack-exchange:before {
      content: "\f18d"
    }

    .fa-stack-overflow:before {
      content: "\f16c"
    }

    .fa-stackpath:before {
      content: "\f842"
    }

    .fa-stamp:before {
      content: "\f5bf"
    }

    .fa-star:before {
      content: "\f005"
    }

    .fa-star-and-crescent:before {
      content: "\f699"
    }

    .fa-star-half:before {
      content: "\f089"
    }

    .fa-star-half-alt:before {
      content: "\f5c0"
    }

    .fa-star-of-david:before {
      content: "\f69a"
    }

    .fa-star-of-life:before {
      content: "\f621"
    }

    .fa-staylinked:before {
      content: "\f3f5"
    }

    .fa-steam:before {
      content: "\f1b6"
    }

    .fa-steam-square:before {
      content: "\f1b7"
    }

    .fa-steam-symbol:before {
      content: "\f3f6"
    }

    .fa-step-backward:before {
      content: "\f048"
    }

    .fa-step-forward:before {
      content: "\f051"
    }

    .fa-stethoscope:before {
      content: "\f0f1"
    }

    .fa-sticker-mule:before {
      content: "\f3f7"
    }

    .fa-sticky-note:before {
      content: "\f249"
    }

    .fa-stop:before {
      content: "\f04d"
    }

    .fa-stop-circle:before {
      content: "\f28d"
    }

    .fa-stopwatch:before {
      content: "\f2f2"
    }

    .fa-store:before {
      content: "\f54e"
    }

    .fa-store-alt:before {
      content: "\f54f"
    }

    .fa-strava:before {
      content: "\f428"
    }

    .fa-stream:before {
      content: "\f550"
    }

    .fa-street-view:before {
      content: "\f21d"
    }

    .fa-strikethrough:before {
      content: "\f0cc"
    }

    .fa-stripe:before {
      content: "\f429"
    }

    .fa-stripe-s:before {
      content: "\f42a"
    }

    .fa-stroopwafel:before {
      content: "\f551"
    }

    .fa-studiovinari:before {
      content: "\f3f8"
    }

    .fa-stumbleupon:before {
      content: "\f1a4"
    }

    .fa-stumbleupon-circle:before {
      content: "\f1a3"
    }

    .fa-subscript:before {
      content: "\f12c"
    }

    .fa-subway:before {
      content: "\f239"
    }

    .fa-suitcase:before {
      content: "\f0f2"
    }

    .fa-suitcase-rolling:before {
      content: "\f5c1"
    }

    .fa-sun:before {
      content: "\f185"
    }

    .fa-superpowers:before {
      content: "\f2dd"
    }

    .fa-superscript:before {
      content: "\f12b"
    }

    .fa-supple:before {
      content: "\f3f9"
    }

    .fa-surprise:before {
      content: "\f5c2"
    }

    .fa-suse:before {
      content: "\f7d6"
    }

    .fa-swatchbook:before {
      content: "\f5c3"
    }

    .fa-swift:before {
      content: "\f8e1"
    }

    .fa-swimmer:before {
      content: "\f5c4"
    }

    .fa-swimming-pool:before {
      content: "\f5c5"
    }

    .fa-symfony:before {
      content: "\f83d"
    }

    .fa-synagogue:before {
      content: "\f69b"
    }

    .fa-sync:before {
      content: "\f021"
    }

    .fa-sync-alt:before {
      content: "\f2f1"
    }

    .fa-syringe:before {
      content: "\f48e"
    }

    .fa-table:before {
      content: "\f0ce"
    }

    .fa-table-tennis:before {
      content: "\f45d"
    }

    .fa-tablet:before {
      content: "\f10a"
    }

    .fa-tablet-alt:before {
      content: "\f3fa"
    }

    .fa-tablets:before {
      content: "\f490"
    }

    .fa-tachometer-alt:before {
      content: "\f3fd"
    }

    .fa-tag:before {
      content: "\f02b"
    }

    .fa-tags:before {
      content: "\f02c"
    }

    .fa-tape:before {
      content: "\f4db"
    }

    .fa-tasks:before {
      content: "\f0ae"
    }

    .fa-taxi:before {
      content: "\f1ba"
    }

    .fa-teamspeak:before {
      content: "\f4f9"
    }

    .fa-teeth:before {
      content: "\f62e"
    }

    .fa-teeth-open:before {
      content: "\f62f"
    }

    .fa-telegram:before {
      content: "\f2c6"
    }

    .fa-telegram-plane:before {
      content: "\f3fe"
    }

    .fa-temperature-high:before {
      content: "\f769"
    }

    .fa-temperature-low:before {
      content: "\f76b"
    }

    .fa-tencent-weibo:before {
      content: "\f1d5"
    }

    .fa-tenge:before {
      content: "\f7d7"
    }

    .fa-terminal:before {
      content: "\f120"
    }

    .fa-text-height:before {
      content: "\f034"
    }

    .fa-text-width:before {
      content: "\f035"
    }

    .fa-th:before {
      content: "\f00a"
    }

    .fa-th-large:before {
      content: "\f009"
    }

    .fa-th-list:before {
      content: "\f00b"
    }

    .fa-the-red-yeti:before {
      content: "\f69d"
    }

    .fa-theater-masks:before {
      content: "\f630"
    }

    .fa-themeco:before {
      content: "\f5c6"
    }

    .fa-themeisle:before {
      content: "\f2b2"
    }

    .fa-thermometer:before {
      content: "\f491"
    }

    .fa-thermometer-empty:before {
      content: "\f2cb"
    }

    .fa-thermometer-full:before {
      content: "\f2c7"
    }

    .fa-thermometer-half:before {
      content: "\f2c9"
    }

    .fa-thermometer-quarter:before {
      content: "\f2ca"
    }

    .fa-thermometer-three-quarters:before {
      content: "\f2c8"
    }

    .fa-think-peaks:before {
      content: "\f731"
    }

    .fa-thumbs-down:before {
      content: "\f165"
    }

    .fa-thumbs-up:before {
      content: "\f164"
    }

    .fa-thumbtack:before {
      content: "\f08d"
    }

    .fa-ticket-alt:before {
      content: "\f3ff"
    }

    .fa-times:before {
      content: "\f00d"
    }

    .fa-times-circle:before {
      content: "\f057"
    }

    .fa-tint:before {
      content: "\f043"
    }

    .fa-tint-slash:before {
      content: "\f5c7"
    }

    .fa-tired:before {
      content: "\f5c8"
    }

    .fa-toggle-off:before {
      content: "\f204"
    }

    .fa-toggle-on:before {
      content: "\f205"
    }

    .fa-toilet:before {
      content: "\f7d8"
    }

    .fa-toilet-paper:before {
      content: "\f71e"
    }

    .fa-toolbox:before {
      content: "\f552"
    }

    .fa-tools:before {
      content: "\f7d9"
    }

    .fa-tooth:before {
      content: "\f5c9"
    }

    .fa-torah:before {
      content: "\f6a0"
    }

    .fa-torii-gate:before {
      content: "\f6a1"
    }

    .fa-tractor:before {
      content: "\f722"
    }

    .fa-trade-federation:before {
      content: "\f513"
    }

    .fa-trademark:before {
      content: "\f25c"
    }

    .fa-traffic-light:before {
      content: "\f637"
    }

    .fa-trailer:before {
      content: "\f941"
    }

    .fa-train:before {
      content: "\f238"
    }

    .fa-tram:before {
      content: "\f7da"
    }

    .fa-transgender:before {
      content: "\f224"
    }

    .fa-transgender-alt:before {
      content: "\f225"
    }

    .fa-trash:before {
      content: "\f1f8"
    }

    .fa-trash-alt:before {
      content: "\f2ed"
    }

    .fa-trash-restore:before {
      content: "\f829"
    }

    .fa-trash-restore-alt:before {
      content: "\f82a"
    }

    .fa-tree:before {
      content: "\f1bb"
    }

    .fa-trello:before {
      content: "\f181"
    }

    .fa-tripadvisor:before {
      content: "\f262"
    }

    .fa-trophy:before {
      content: "\f091"
    }

    .fa-truck:before {
      content: "\f0d1"
    }

    .fa-truck-loading:before {
      content: "\f4de"
    }

    .fa-truck-monster:before {
      content: "\f63b"
    }

    .fa-truck-moving:before {
      content: "\f4df"
    }

    .fa-truck-pickup:before {
      content: "\f63c"
    }

    .fa-tshirt:before {
      content: "\f553"
    }

    .fa-tty:before {
      content: "\f1e4"
    }

    .fa-tumblr:before {
      content: "\f173"
    }

    .fa-tumblr-square:before {
      content: "\f174"
    }

    .fa-tv:before {
      content: "\f26c"
    }

    .fa-twitch:before {
      content: "\f1e8"
    }

    .fa-twitter:before {
      content: "\f099"
    }

    .fa-twitter-square:before {
      content: "\f081"
    }

    .fa-typo3:before {
      content: "\f42b"
    }

    .fa-uber:before {
      content: "\f402"
    }

    .fa-ubuntu:before {
      content: "\f7df"
    }

    .fa-uikit:before {
      content: "\f403"
    }

    .fa-umbraco:before {
      content: "\f8e8"
    }

    .fa-umbrella:before {
      content: "\f0e9"
    }

    .fa-umbrella-beach:before {
      content: "\f5ca"
    }

    .fa-underline:before {
      content: "\f0cd"
    }

    .fa-undo:before {
      content: "\f0e2"
    }

    .fa-undo-alt:before {
      content: "\f2ea"
    }

    .fa-uniregistry:before {
      content: "\f404"
    }

    .fa-unity:before {
      content: "\f949"
    }

    .fa-universal-access:before {
      content: "\f29a"
    }

    .fa-university:before {
      content: "\f19c"
    }

    .fa-unlink:before {
      content: "\f127"
    }

    .fa-unlock:before {
      content: "\f09c"
    }

    .fa-unlock-alt:before {
      content: "\f13e"
    }

    .fa-untappd:before {
      content: "\f405"
    }

    .fa-upload:before {
      content: "\f093"
    }

    .fa-ups:before {
      content: "\f7e0"
    }

    .fa-usb:before {
      content: "\f287"
    }

    .fa-user:before {
      content: "\f007"
    }

    .fa-user-alt:before {
      content: "\f406"
    }

    .fa-user-alt-slash:before {
      content: "\f4fa"
    }

    .fa-user-astronaut:before {
      content: "\f4fb"
    }

    .fa-user-check:before {
      content: "\f4fc"
    }

    .fa-user-circle:before {
      content: "\f2bd"
    }

    .fa-user-clock:before {
      content: "\f4fd"
    }

    .fa-user-cog:before {
      content: "\f4fe"
    }

    .fa-user-edit:before {
      content: "\f4ff"
    }

    .fa-user-friends:before {
      content: "\f500"
    }

    .fa-user-graduate:before {
      content: "\f501"
    }

    .fa-user-injured:before {
      content: "\f728"
    }

    .fa-user-lock:before {
      content: "\f502"
    }

    .fa-user-md:before {
      content: "\f0f0"
    }

    .fa-user-minus:before {
      content: "\f503"
    }

    .fa-user-ninja:before {
      content: "\f504"
    }

    .fa-user-nurse:before {
      content: "\f82f"
    }

    .fa-user-plus:before {
      content: "\f234"
    }

    .fa-user-secret:before {
      content: "\f21b"
    }

    .fa-user-shield:before {
      content: "\f505"
    }

    .fa-user-slash:before {
      content: "\f506"
    }

    .fa-user-tag:before {
      content: "\f507"
    }

    .fa-user-tie:before {
      content: "\f508"
    }

    .fa-user-times:before {
      content: "\f235"
    }

    .fa-users:before {
      content: "\f0c0"
    }

    .fa-users-cog:before {
      content: "\f509"
    }

    .fa-usps:before {
      content: "\f7e1"
    }

    .fa-ussunnah:before {
      content: "\f407"
    }

    .fa-utensil-spoon:before {
      content: "\f2e5"
    }

    .fa-utensils:before {
      content: "\f2e7"
    }

    .fa-vaadin:before {
      content: "\f408"
    }

    .fa-vector-square:before {
      content: "\f5cb"
    }

    .fa-venus:before {
      content: "\f221"
    }

    .fa-venus-double:before {
      content: "\f226"
    }

    .fa-venus-mars:before {
      content: "\f228"
    }

    .fa-viacoin:before {
      content: "\f237"
    }

    .fa-viadeo:before {
      content: "\f2a9"
    }

    .fa-viadeo-square:before {
      content: "\f2aa"
    }

    .fa-vial:before {
      content: "\f492"
    }

    .fa-vials:before {
      content: "\f493"
    }

    .fa-viber:before {
      content: "\f409"
    }

    .fa-video:before {
      content: "\f03d"
    }

    .fa-video-slash:before {
      content: "\f4e2"
    }

    .fa-vihara:before {
      content: "\f6a7"
    }

    .fa-vimeo:before {
      content: "\f40a"
    }

    .fa-vimeo-square:before {
      content: "\f194"
    }

    .fa-vimeo-v:before {
      content: "\f27d"
    }

    .fa-vine:before {
      content: "\f1ca"
    }

    .fa-vk:before {
      content: "\f189"
    }

    .fa-vnv:before {
      content: "\f40b"
    }

    .fa-voicemail:before {
      content: "\f897"
    }

    .fa-volleyball-ball:before {
      content: "\f45f"
    }

    .fa-volume-down:before {
      content: "\f027"
    }

    .fa-volume-mute:before {
      content: "\f6a9"
    }

    .fa-volume-off:before {
      content: "\f026"
    }

    .fa-volume-up:before {
      content: "\f028"
    }

    .fa-vote-yea:before {
      content: "\f772"
    }

    .fa-vr-cardboard:before {
      content: "\f729"
    }

    .fa-vuejs:before {
      content: "\f41f"
    }

    .fa-walking:before {
      content: "\f554"
    }

    .fa-wallet:before {
      content: "\f555"
    }

    .fa-warehouse:before {
      content: "\f494"
    }

    .fa-water:before {
      content: "\f773"
    }

    .fa-wave-square:before {
      content: "\f83e"
    }

    .fa-waze:before {
      content: "\f83f"
    }

    .fa-weebly:before {
      content: "\f5cc"
    }

    .fa-weibo:before {
      content: "\f18a"
    }

    .fa-weight:before {
      content: "\f496"
    }

    .fa-weight-hanging:before {
      content: "\f5cd"
    }

    .fa-weixin:before {
      content: "\f1d7"
    }

    .fa-whatsapp:before {
      content: "\f232"
    }

    .fa-whatsapp-square:before {
      content: "\f40c"
    }

    .fa-wheelchair:before {
      content: "\f193"
    }

    .fa-whmcs:before {
      content: "\f40d"
    }

    .fa-wifi:before {
      content: "\f1eb"
    }

    .fa-wikipedia-w:before {
      content: "\f266"
    }

    .fa-wind:before {
      content: "\f72e"
    }

    .fa-window-close:before {
      content: "\f410"
    }

    .fa-window-maximize:before {
      content: "\f2d0"
    }

    .fa-window-minimize:before {
      content: "\f2d1"
    }

    .fa-window-restore:before {
      content: "\f2d2"
    }

    .fa-windows:before {
      content: "\f17a"
    }

    .fa-wine-bottle:before {
      content: "\f72f"
    }

    .fa-wine-glass:before {
      content: "\f4e3"
    }

    .fa-wine-glass-alt:before {
      content: "\f5ce"
    }

    .fa-wix:before {
      content: "\f5cf"
    }

    .fa-wizards-of-the-coast:before {
      content: "\f730"
    }

    .fa-wolf-pack-battalion:before {
      content: "\f514"
    }

    .fa-won-sign:before {
      content: "\f159"
    }

    .fa-wordpress:before {
      content: "\f19a"
    }

    .fa-wordpress-simple:before {
      content: "\f411"
    }

    .fa-wpbeginner:before {
      content: "\f297"
    }

    .fa-wpexplorer:before {
      content: "\f2de"
    }

    .fa-wpforms:before {
      content: "\f298"
    }

    .fa-wpressr:before {
      content: "\f3e4"
    }

    .fa-wrench:before {
      content: "\f0ad"
    }

    .fa-x-ray:before {
      content: "\f497"
    }

    .fa-xbox:before {
      content: "\f412"
    }

    .fa-xing:before {
      content: "\f168"
    }

    .fa-xing-square:before {
      content: "\f169"
    }

    .fa-y-combinator:before {
      content: "\f23b"
    }

    .fa-yahoo:before {
      content: "\f19e"
    }

    .fa-yammer:before {
      content: "\f840"
    }

    .fa-yandex:before {
      content: "\f413"
    }

    .fa-yandex-international:before {
      content: "\f414"
    }

    .fa-yarn:before {
      content: "\f7e3"
    }

    .fa-yelp:before {
      content: "\f1e9"
    }

    .fa-yen-sign:before {
      content: "\f157"
    }

    .fa-yin-yang:before {
      content: "\f6ad"
    }

    .fa-yoast:before {
      content: "\f2b1"
    }

    .fa-youtube:before {
      content: "\f167"
    }

    .fa-youtube-square:before {
      content: "\f431"
    }

    .fa-zhihu:before {
      content: "\f63f"
    }

    .sr-only {
      border: 0;
      clip: rect(0, 0, 0, 0);
      height: 1px;
      margin: -1px;
      overflow: hidden;
      padding: 0;
      position: absolute;
      width: 1px
    }

    .sr-only-focusable:active,
    .sr-only-focusable:focus {
      clip: auto;
      height: auto;
      margin: 0;
      overflow: visible;
      position: static;
      width: auto
    }

    /*!
 * Font Awesome Free 5.12.0 by @fontawesome - https://fontawesome.com
 * License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License)
 */
    @font-face {
      font-family: "Font Awesome 5 Free";
      font-style: normal;
      font-weight: 400;
      font-display: auto;
      src: url(//congreso.relep.org/wp-content/plugins/elementor/assets/lib/font-awesome/css/../webfonts/fa-regular-400.eot);
      src: url(//congreso.relep.org/wp-content/plugins/elementor/assets/lib/font-awesome/css/../webfonts/fa-regular-400.eot?#iefix) format("embedded-opentype"), url(//congreso.relep.org/wp-content/plugins/elementor/assets/lib/font-awesome/css/../webfonts/fa-regular-400.woff2) format("woff2"), url(//congreso.relep.org/wp-content/plugins/elementor/assets/lib/font-awesome/css/../webfonts/fa-regular-400.woff) format("woff"), url(//congreso.relep.org/wp-content/plugins/elementor/assets/lib/font-awesome/css/../webfonts/fa-regular-400.ttf) format("truetype"), url(//congreso.relep.org/wp-content/plugins/elementor/assets/lib/font-awesome/css/../webfonts/fa-regular-400.svg#fontawesome) format("svg")
    }

    .far {
      font-family: "Font Awesome 5 Free";
      font-weight: 400
    }

    /*!
 * Font Awesome Free 5.12.0 by @fontawesome - https://fontawesome.com
 * License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License)
 */
    @font-face {
      font-family: "Font Awesome 5 Free";
      font-style: normal;
      font-weight: 900;
      font-display: auto;
      src: url(//congreso.relep.org/wp-content/plugins/elementor/assets/lib/font-awesome/css/../webfonts/fa-solid-900.eot);
      src: url(//congreso.relep.org/wp-content/plugins/elementor/assets/lib/font-awesome/css/../webfonts/fa-solid-900.eot?#iefix) format("embedded-opentype"), url(//congreso.relep.org/wp-content/plugins/elementor/assets/lib/font-awesome/css/../webfonts/fa-solid-900.woff2) format("woff2"), url(//congreso.relep.org/wp-content/plugins/elementor/assets/lib/font-awesome/css/../webfonts/fa-solid-900.woff) format("woff"), url(//congreso.relep.org/wp-content/plugins/elementor/assets/lib/font-awesome/css/../webfonts/fa-solid-900.ttf) format("truetype"), url(//congreso.relep.org/wp-content/plugins/elementor/assets/lib/font-awesome/css/../webfonts/fa-solid-900.svg#fontawesome) format("svg")
    }

    .fa,
    .fas {
      font-family: "Font Awesome 5 Free";
      font-weight: 900
    }
  </style>
  <style media="print">
    @charset "UTF-8";

    @media print {
      @page {
        margin: 2cm
      }

      .entry-header,
      .site-footer {
        margin: 0
      }

      .posts {
        padding: 0
      }

      .entry-content,
      .entry-content p,
      .section-inner,
      .section-inner.max-percentage,
      .section-inner.medium,
      .section-inner.small,
      .section-inner.thin {
        max-width: 100%;
        width: 100%
      }

      body {
        background: #fff !important;
        color: #000;
        font: 13pt Georgia, "Times New Roman", Times, serif;
        line-height: 1.3
      }

      h1 {
        font-size: 20pt
      }

      h2,
      h2.entry-title,
      h3,
      h4,
      .has-normal-font-size,
      .has-regular-font-size,
      .has-large-font-size,
      .comments-header {
        font-size: 14pt;
        margin-top: 1cm
      }

      a {
        page-break-inside: avoid
      }

      blockquote {
        page-break-inside: avoid
      }

      h1,
      h2,
      h3,
      h4,
      h5,
      h6 {
        page-break-after: avoid;
        page-break-inside: avoid
      }

      img {
        page-break-inside: avoid;
        page-break-after: avoid
      }

      table,
      pre {
        page-break-inside: avoid
      }

      ul,
      ol,
      dl {
        page-break-before: avoid
      }

      a:link,
      a:visited,
      a {
        background: 0 0;
        font-weight: 700;
        text-decoration: underline
      }

      a {
        page-break-inside: avoid
      }

      a[href^=http]:after {
        content: " < "attr(href) "> "
      }

      a:after>img {
        content: ""
      }

      article a[href^="#"]:after {
        content: ""
      }

      a:not(:local-link):after {
        content: " < "attr(href) "> "
      }

      #site-header,
      .comment-form,
      .comments-wrapper,
      .comment .comment-metadata,
      .footer-social-wrapper,
      .footer-widgets-outer-wrapper,
      .header-navigation-wrapper,
      .pagination-wrapper,
      .post-meta-wrapper.post-meta-single-bottom,
      .post-separator,
      .site-logo img {
        display: none
      }

      .entry-content .wp-block-button .wp-block-button__link,
      .entry-content .wp-block-button .wp-block-file__button,
      .entry-content .button {
        background: 0 0;
        color: #000
      }
    }
  </style>
  <title>LOBBY &#8211; Congreso</title>
  <link rel='dns-prefetch' href='//s.w.org' />
  <link href='https://sp-ao.shortpixel.ai' rel='preconnect' />
  <link rel="alternate" type="application/rss+xml" title="Congreso &raquo; Feed" href="https://congreso.relep.org/feed/" />
  <link rel="alternate" type="application/rss+xml" title="Congreso &raquo; Feed de los comentarios" href="https://congreso.relep.org/comments/feed/" />
  <script>
    window._wpemojiSettings = {
      "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.0.0\/72x72\/",
      "ext": ".png",
      "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.0.0\/svg\/",
      "svgExt": ".svg",
      "source": {
        "concatemoji": "https:\/\/congreso.relep.org\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.5.9"
      }
    };
    ! function(e, a, t) {
      var n, r, o, i = a.createElement("canvas"),
        p = i.getContext && i.getContext("2d");

      function s(e, t) {
        var a = String.fromCharCode;
        p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, e), 0, 0);
        e = i.toDataURL();
        return p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, t), 0, 0), e === i.toDataURL()
      }

      function c(e) {
        var t = a.createElement("script");
        t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t)
      }
      for (o = Array("flag", "emoji"), t.supports = {
          everything: !0,
          everythingExceptFlag: !0
        }, r = 0; r < o.length; r++) t.supports[o[r]] = function(e) {
        if (!p || !p.fillText) return !1;
        switch (p.textBaseline = "top", p.font = "600 32px Arial", e) {
          case "flag":
            return s([127987, 65039, 8205, 9895, 65039], [127987, 65039, 8203, 9895, 65039]) ? !1 : !s([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819]) && !s([55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447]);
          case "emoji":
            return !s([55357, 56424, 8205, 55356, 57212], [55357, 56424, 8203, 55356, 57212])
        }
        return !1
      }(o[r]), t.supports.everything = t.supports.everything && t.supports[o[r]], "flag" !== o[r] && (t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[o[r]]);
      t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t.readyCallback = function() {
        t.DOMReady = !0
      }, t.supports.everything || (n = function() {
        t.readyCallback()
      }, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function() {
        "complete" === a.readyState && t.readyCallback()
      })), (n = t.source || {}).concatemoji ? c(n.concatemoji) : n.wpemoji && n.twemoji && (c(n.twemoji), c(n.wpemoji)))
    }(window, document, window._wpemojiSettings);
  </script>
  <link rel='stylesheet' id='elementor-post-8-css' href='https://congreso.relep.org/wp-content/cache/autoptimize/css/autoptimize_single_54d0efecbfda3195ab79843f7ea09eca.css?ver=1618623475' media='all' />
  <link rel='stylesheet' id='elementor-global-css' href='https://congreso.relep.org/wp-content/cache/autoptimize/css/autoptimize_single_843ca02588b4dbdab71a812f0d1c9433.css?ver=1618623475' media='all' />
  <link rel='stylesheet' id='elementor-post-42-css' href='https://congreso.relep.org/wp-content/cache/autoptimize/css/autoptimize_single_1306d9e51aea3338af3e65754c0ca93b.css?ver=1653922743' media='all' />
  <link rel='stylesheet' id='google-fonts-1-css' href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;ver=5.5.9' media='all' />
  <script>
    var rcewpp = {
      "ajax_url": "https://congreso.relep.org/wp-admin/admin-ajax.php",
      "nonce": "1f962b6ed9",
      "home_url": "https://congreso.relep.org/",
      "settings_icon": 'https://congreso.relep.org/wp-content/plugins/export-wp-page-to-static-html/admin/images/settings.png',
      "settings_hover_icon": 'https://congreso.relep.org/wp-content/plugins/export-wp-page-to-static-html/admin/images/settings_hover.png'
    };
    /* ]]\> */
  </script>
  <link rel="https://api.w.org/" href="https://congreso.relep.org/wp-json/" />
  <link rel="alternate" type="application/json" href="https://congreso.relep.org/wp-json/wp/v2/pages/42" />
  <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://congreso.relep.org/xmlrpc.php?rsd" />
  <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://congreso.relep.org/wp-includes/wlwmanifest.xml" />
  <meta name="generator" content="WordPress 5.5.9" />
  <link rel="canonical" href="https://congreso.relep.org/sala-general/" />
  <link rel='shortlink' href='https://congreso.relep.org/?p=42' />
  <link rel="alternate" type="application/json+oembed" href="https://congreso.relep.org/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fcongreso.relep.org%2Fsala-general%2F" />
  <link rel="alternate" type="text/xml+oembed" href="https://congreso.relep.org/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fcongreso.relep.org%2Fsala-general%2F&#038;format=xml" />
  <script>
    document.documentElement.className = document.documentElement.className.replace('no-js', 'js');
  </script>
  <style id="custom-background-css">
    body.custom-background {
      background-color: #29a825;
      background-image: url("https://congreso.relep.org/wp-content/uploads/2020/11/ENTRADA-PRINCIPAL-RELAYN-RENDERIZADA-V2-scaled.jpg");
      background-position: left top;
      background-size: cover;
      background-repeat: no-repeat;
      background-attachment: fixed;
    }
  </style>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />
</head>

<body data-rsssl=1 class="page-template page-template-elementor_canvas page page-id-42 custom-background wp-embed-responsive singular missing-post-thumbnail has-no-pagination not-showing-comments show-avatars elementor_canvas footer-top-visible elementor-default elementor-template-canvas elementor-kit-8 elementor-page elementor-page-42"> <a class="skip-link screen-reader-text" href="#site-content">Saltar al contenido</a>
  <div data-elementor-type="wp-page" data-elementor-id="42" class="elementor elementor-42" data-elementor-settings="[]">
    <div class="elementor-inner">
      <div class="elementor-section-wrap">
        <section class="elementor-section elementor-top-section elementor-element elementor-element-2791780 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="2791780" data-element_type="section">
          <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-row">
              <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6fce91f" data-id="6fce91f" data-element_type="column">
                <div class="elementor-column-wrap elementor-element-populated">
                  <div class="elementor-widget-wrap">
                    <div class="elementor-element elementor-element-7d89429 elementor-widget elementor-widget-shortcode" data-id="7d89429" data-element_type="widget" data-widget_type="shortcode.default">
                      <div class="elementor-widget-container">
                        <div class="elementor-shortcode"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="elementor-section elementor-top-section elementor-element elementor-element-d62100e elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="d62100e" data-element_type="section">
          <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-row">
              <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-68a632c" data-id="68a632c" data-element_type="column">
                <div class="elementor-column-wrap elementor-element-populated">
                  <div class="elementor-widget-wrap">
                    <section class="elementor-section elementor-inner-section elementor-element elementor-element-9ab9fa9 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="9ab9fa9" data-element_type="section">
                      <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                          <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-9e57397" data-id="9e57397" data-element_type="column">
                            <div class="elementor-column-wrap">
                              <div class="elementor-widget-wrap"></div>
                            </div>
                          </div>
                          <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-7cc6ade" data-id="7cc6ade" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                              <div class="elementor-widget-wrap">
                                <div class="elementor-element elementor-element-d067439 elementor-widget elementor-widget-html" data-id="d067439" data-element_type="widget" data-widget_type="html.default">
                                  <div class="elementor-widget-container"> <iframe src="https://congreso.relep.org/wp-content/uploads/2021/08/Elevator_Door_Open_01_Sound_Effect_Mp3_160.mp3" id="audio" style="display: none"></iframe> <audio id="player" autoplay>
                                      <source src="https://congreso.relep.org/wp-content/uploads/2021/08/Elevator_Door_Open_01_Sound_Effect_Mp3_160.mp3">
                                    </audio></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-ba0ce17" data-id="ba0ce17" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                              <div class="elementor-widget-wrap">
                                <div class="elementor-element elementor-element-fc0ec83 elementor-fixed elementor-align-right elementor-widget__width-initial elementor-widget elementor-widget-button" data-id="fc0ec83" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;fixed&quot;}" data-widget_type="button.default">
                                  <div class="elementor-widget-container">
                                    <div class="elementor-button-wrapper"> <a href="https://congreso.relep.org/mezzanine/" class="elementor-button-link elementor-button elementor-size-xs elementor-animation-shrink" role="button"> <span class="elementor-button-content-wrapper"> <span class="elementor-button-icon elementor-align-icon-right"> <i aria-hidden="true" class="far fa-arrow-alt-circle-right"></i> </span> <span class="elementor-button-text">IR A<br>MEZZANINE</span> </span> </a></div>
                                  </div>
                                </div>
                                <div class="elementor-element elementor-element-6fae5ac elementor-align-right elementor-fixed elementor-widget__width-initial elementor-widget elementor-widget-button" data-id="6fae5ac" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;fixed&quot;}" data-widget_type="button.default">
                                  <div class="elementor-widget-container">
                                    <div class="elementor-button-wrapper"> <a href="https://www.tidio.com/talk/leucsw6pce16vxspleocxkahvrhmtneq" target="_blank" class="elementor-button-link elementor-button elementor-size-sm elementor-animation-shrink" role="button"> <span class="elementor-button-content-wrapper"> <span class="elementor-button-text">APOYO TÉCNICO</span> </span> </a></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </section>
                    <div class="elementor-element elementor-element-9639552 elementor-widget__width-initial elementor-fixed elementor-widget elementor-widget-button" data-id="9639552" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;fixed&quot;}" data-widget_type="button.default">
                      <div class="elementor-widget-container">
                        <div class="elementor-button-wrapper"> <a href="https://congreso.relep.org/elevador-manual-2/" class="elementor-button-link elementor-button elementor-size-sm elementor-animation-shrink" role="button"> <span class="elementor-button-content-wrapper"> <span class="elementor-button-text">USAR ELEVADOR</span> </span> </a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-c74f894" data-id="c74f894" data-element_type="column">
                <div class="elementor-column-wrap elementor-element-populated">
                  <div class="elementor-widget-wrap">
                    <div class="elementor-element elementor-element-0f5dfd5 elementor-widget__width-initial elementor-fixed elementor-widget elementor-widget-button" data-id="0f5dfd5" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;fixed&quot;}" data-widget_type="button.default">
                      <div class="elementor-widget-container">
                        <div class="elementor-button-wrapper"> <a href="https://drive.google.com/file/d/1mrlY78PctrhOk_b5hFZ5JLGMXRFhiNBw/view?usp=sharing" target="_blank" class="elementor-button-link elementor-button elementor-size-sm elementor-animation-shrink" role="button"> <span class="elementor-button-content-wrapper"> <span class="elementor-button-icon elementor-align-icon-left"> <i aria-hidden="true" class="fas fa-file-download"></i> </span> <span class="elementor-button-text">Programa RELEP</span> </span> </a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-bae2254" data-id="bae2254" data-element_type="column">
                <div class="elementor-column-wrap elementor-element-populated">
                  <div class="elementor-widget-wrap">
                    <div class="elementor-element elementor-element-edec2e2 elementor-widget__width-initial elementor-fixed elementor-aspect-ratio-169 elementor-widget elementor-widget-video" data-id="edec2e2" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;fixed&quot;,&quot;aspect_ratio&quot;:&quot;169&quot;}" data-widget_type="video.default">
                      <div class="elementor-widget-container">
                        <div class="elementor-wrapper elementor-fit-aspect-ratio elementor-open-inline"> <iframe class="elementor-video-iframe" allowfullscreen title="Reproductor de vídeo youtube" src="https://www.youtube.com/embed/Ab76XIuIjxo?feature=oembed&amp;autoplay=1&amp;playsinline=1&amp;start&amp;end&amp;wmode=opaque&amp;loop=0&amp;controls=1&amp;mute=0&amp;rel=0&amp;modestbranding=0"></iframe></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="elementor-section elementor-top-section elementor-element elementor-element-dbd8cd2 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="dbd8cd2" data-element_type="section">
          <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-row">
              <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-cb7689a" data-id="cb7689a" data-element_type="column">
                <div class="elementor-column-wrap">
                  <div class="elementor-widget-wrap"></div>
                </div>
              </div>
              <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-9f940d1" data-id="9f940d1" data-element_type="column">
                <div class="elementor-column-wrap elementor-element-populated">
                  <div class="elementor-widget-wrap">
                    <div class="elementor-element elementor-element-ce14d2e elementor-fixed elementor-widget__width-initial elementor-widget elementor-widget-button" data-id="ce14d2e" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;fixed&quot;}" data-widget_type="button.default">
                      <div class="elementor-widget-container">
                        <div class="elementor-button-wrapper"> <a href="https://vive.redesla.net/inicio/vive-chiapas" class="elementor-button-link elementor-button elementor-size-xs elementor-animation-shrink" role="button"> <span class="elementor-button-content-wrapper"> <span class="elementor-button-text">VIVE CHIAPAS</span> </span> </a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div> <noscript>
    <style>
      .lazyload {
        display: none;
      }
    </style>
  </noscript>
  <script data-noptimize="1">
    window.lazySizesConfig = window.lazySizesConfig || {};
    window.lazySizesConfig.loadMode = 1;
  </script>
  <script async data-noptimize="1" src='https://congreso.relep.org/wp-content/plugins/autoptimize/classes/external/js/lazysizes.min.js?ao_version=2.8.1'></script>
  <script data-noptimize="1">
    function c_img(a, b) {
      src = "avif" == b ? "data:image/avif;base64,AAAAIGZ0eXBhdmlmAAAAAGF2aWZtaWYxbWlhZk1BMUIAAADybWV0YQAAAAAAAAAoaGRscgAAAAAAAAAAcGljdAAAAAAAAAAAAAAAAGxpYmF2aWYAAAAADnBpdG0AAAAAAAEAAAAeaWxvYwAAAABEAAABAAEAAAABAAABGgAAABoAAAAoaWluZgAAAAAAAQAAABppbmZlAgAAAAABAABhdjAxQ29sb3IAAAAAamlwcnAAAABLaXBjbwAAABRpc3BlAAAAAAAAAAEAAAABAAAAEHBpeGkAAAAAAwgICAAAAAxhdjFDgQ0MAAAAABNjb2xybmNseAACAAIAAYAAAAAXaXBtYQAAAAAAAAABAAEEAQKDBAAAACJtZGF0EgAKCBgADsgQEAwgMgwf8AAAWAAAAACvJ+o=" : "data:image/webp;base64,UklGRhoAAABXRUJQVlA4TA0AAAAvAAAAEAcQERGIiP4HAA==";
      var c = new Image;
      c.onload = function() {
        var d = 0 < c.width && 0 < c.height;
        a(d, b)
      }, c.onerror = function() {
        a(!1, b)
      }, c.src = src
    }

    function s_img(a, b) {
      w = window, "avif" == b ? !1 == a ? c_img(s_img, "webp") : w.ngImg = "avif" : !1 == a ? w.ngImg = !1 : w.ngImg = "webp"
    }
    c_img(s_img, "avif");
    document.addEventListener("lazybeforeunveil", function({
      target: a
    }) {
      window.ngImg && ["data-src", "data-srcset"].forEach(function(b) {
        attr = a.getAttribute(b), null !== attr && -1 == attr.indexOf("/client/to_") && a.setAttribute(b, attr.replace(/\/client\//, "/client/to_" + window.ngImg + ","))
      })
    });
  </script>
  <script src='https://congreso.relep.org/wp-includes/js/jquery/jquery.js?ver=1.12.4-wp' id='jquery-core-js'></script>
  <script id='elementor-frontend-js-before'>
    var elementorFrontendConfig = {
      "environmentMode": {
        "edit": false,
        "wpPreview": false
      },
      "i18n": {
        "shareOnFacebook": "Compartir en Facebook",
        "shareOnTwitter": "Compartir en Twitter",
        "pinIt": "Pinear",
        "download": "Descargar",
        "downloadImage": "Descargar imagen",
        "fullscreen": "Pantalla completa",
        "zoom": "Zoom",
        "share": "Compartir",
        "playVideo": "Reproducir v\u00eddeo",
        "previous": "Anterior",
        "next": "Siguiente",
        "close": "Cerrar"
      },
      "is_rtl": false,
      "breakpoints": {
        "xs": 0,
        "sm": 480,
        "md": 768,
        "lg": 1025,
        "xl": 1440,
        "xxl": 1600
      },
      "version": "3.0.16",
      "is_static": false,
      "legacyMode": {
        "elementWrappers": true
      },
      "urls": {
        "assets": "https:\/\/congreso.relep.org\/wp-content\/plugins\/elementor\/assets\/"
      },
      "settings": {
        "page": [],
        "editorPreferences": []
      },
      "kit": {
        "global_image_lightbox": "yes",
        "lightbox_enable_counter": "yes",
        "lightbox_enable_fullscreen": "yes",
        "lightbox_enable_zoom": "yes",
        "lightbox_enable_share": "yes",
        "lightbox_title_src": "title",
        "lightbox_description_src": "description"
      },
      "post": {
        "id": 42,
        "title": "LOBBY%20%E2%80%93%20Congreso",
        "excerpt": "",
        "featuredImage": false
      }
    };
  </script>
  <script>
    /(trident|msie)/i.test(navigator.userAgent) && document.getElementById && window.addEventListener && window.addEventListener("hashchange", function() {
      var t, e = location.hash.substring(1);
      /^[A-z0-9_-]+$/.test(e) && (t = document.getElementById(e)) && (/^(?:a|select|input|button|textarea)$/i.test(t.tagName) || (t.tabIndex = -1), t.focus())
    }, !1);
  </script>
  <script defer src="https://congreso.relep.org/wp-content/cache/autoptimize/js/autoptimize_9867ea9dd590a420760252b97184097c.js"></script>
</body>

</html>