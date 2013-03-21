// Created by iWeb 3.0.4 local-build-20120615

setTransparentGifURL('Media/transparent.gif');function applyEffects()
{var registry=IWCreateEffectRegistry();registry.registerEffects({stroke_0:new IWStrokeParts([{rect:new IWRect(-5,5,10,128),url:'Home_files/stroke.png'},{rect:new IWRect(-5,-5,10,10),url:'Home_files/stroke_1.png'},{rect:new IWRect(5,-5,146,10),url:'Home_files/stroke_2.png'},{rect:new IWRect(151,-5,11,10),url:'Home_files/stroke_3.png'},{rect:new IWRect(151,5,11,128),url:'Home_files/stroke_4.png'},{rect:new IWRect(151,133,11,10),url:'Home_files/stroke_5.png'},{rect:new IWRect(5,133,146,10),url:'Home_files/stroke_6.png'},{rect:new IWRect(-5,133,10,10),url:'Home_files/stroke_7.png'}],new IWSize(156,138))});registry.applyEffects();}
function hostedOnDM()
{return false;}
function onPageLoad()
{loadMozillaCSS('Home_files/HomeMoz.css')
adjustLineHeightIfTooBig('id1');adjustFontSizeIfTooBig('id1');detectBrowser();adjustLineHeightIfTooBig('id2');adjustFontSizeIfTooBig('id2');Widget.onload();fixupAllIEPNGBGs();fixAllIEPNGs('Media/transparent.gif');applyEffects()}
function onPageUnload()
{Widget.onunload();}
