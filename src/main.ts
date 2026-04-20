import { lazyLoad } from 'unlazy'
// @ts-expect-error ts(2882)
import 'virtual:sugarcube.css'
// @ts-expect-error ts(2882)
import './styles/main.css'

// eslint-disable-next-line no-console
console.log('hello kirby')

// Lazily load all `img[loading="lazy"]` images
lazyLoad()
