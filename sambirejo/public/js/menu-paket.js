const balkondes = document.getElementById('balkondes')
const rmahika_kb = document.getElementById('rmahika_kb')
const paket_std = document.getElementById('paket_std')
const jbreksi = document.getElementById('jbreksi')
const cmahika = document.getElementById('cmahika')

const btn_balkondes = document.getElementById('btn-balkondes')
const btn_rmahika_kb = document.getElementById('btn-rmahika_kb')
const btn_paket_std = document.getElementById('btn-paket_std')
const btn_jbreksi = document.getElementById('btn-jbreksi')
const btn_cmahika = document.getElementById('btn-cmahika')

const wa_balkondes = document.getElementById('wa-balkondes')
const wa_rmahika_kb = document.getElementById('wa-rmahika_kb')
const wa_paket_std_r = document.getElementById('wa-paket_std-r')
const wa_paket_std_p = document.getElementById('wa-paket_std-p')
const wa_jbreksi1 = document.getElementById('wa-jbreksi-1')
const wa_jbreksi2 = document.getElementById('wa-jbreksi-2')
const wa_cmahika = document.getElementById('wa-cmahika')

const btn_pesan1 = document.getElementById('btn-pesan1')
const btn_pesan2 = document.getElementById('btn-pesan2')
const btn_pesan3 = document.getElementById('btn-pesan3')
const btn_pesan4 = document.getElementById('btn-pesan4')
const btn_pesan5 = document.getElementById('btn-pesan5')

btn_balkondes.onclick = function () {
    btn_balkondes.style.background = "#95d5ff"
    btn_rmahika_kb.style.background = "#3498db"
    btn_paket_std.style.background = "#3498db"
    btn_jbreksi.style.background = "#3498db"
    btn_cmahika.style.background = "#3498db"

    balkondes.style.display = "block"
    rmahika_kb.style.display = "none"
    paket_std.style.display = "none"
    jbreksi.style.display = "none"
    cmahika.style.display = "none"
    
    wa_balkondes.style.display = "block"
    wa_rmahika_kb.style.display = "none"
    wa_paket_std_r.style.display = "none"
    wa_paket_std_p.style.display = "none"
    wa_jbreksi1.style.display = "none"
    wa_jbreksi2.style.display = "none"
    wa_cmahika.style.display = "none"   

    btn_pesan1.style.display = "block"
    btn_pesan2.style.display = "none"
    btn_pesan3.style.display = "none"
    btn_pesan4.style.display = "none"
    btn_pesan5.style.display = "none"
}

btn_rmahika_kb.onclick = function () {
    btn_balkondes.style.background = "#3498db"
    btn_rmahika_kb.style.background = "#95d5ff"
    btn_paket_std.style.background = "#3498db"
    btn_jbreksi.style.background = "#3498db"
    btn_cmahika.style.background = "#3498db"

    balkondes.style.display = "none"
    rmahika_kb.style.display = "block"
    paket_std.style.display = "none"
    jbreksi.style.display = "none"
    cmahika.style.display = "none"

    wa_balkondes.style.display = "none"
    wa_rmahika_kb.style.display = "block"
    wa_paket_std_r.style.display = "none"
    wa_paket_std_p.style.display = "none"
    wa_jbreksi1.style.display = "none"
    wa_jbreksi2.style.display = "none"
    wa_cmahika.style.display = "none" 

    btn_pesan1.style.display = "none"
    btn_pesan2.style.display = "block"
    btn_pesan3.style.display = "none"
    btn_pesan4.style.display = "none"
    btn_pesan5.style.display = "none"
}

btn_paket_std.onclick = function () {
    btn_balkondes.style.background = "#3498db"
    btn_rmahika_kb.style.background = "#3498db"
    btn_paket_std.style.background = "#95d5ff"
    btn_jbreksi.style.background = "#3498db"
    btn_cmahika.style.background = "#3498db"

    balkondes.style.display = "none"
    rmahika_kb.style.display = "none"
    paket_std.style.display = "block"
    jbreksi.style.display = "none"
    cmahika.style.display = "none"

    wa_balkondes.style.display = "none"
    wa_rmahika_kb.style.display = "none"
    wa_paket_std_r.style.display = "block"
    wa_paket_std_p.style.display = "block"
    wa_jbreksi1.style.display = "none"
    wa_jbreksi2.style.display = "none"
    wa_cmahika.style.display = "none" 

    btn_pesan1.style.display = "none"
    btn_pesan2.style.display = "none"
    btn_pesan3.style.display = "block"
    btn_pesan4.style.display = "none"
    btn_pesan5.style.display = "none"
}

btn_jbreksi.onclick = function () {
    btn_balkondes.style.background = "#3498db"
    btn_rmahika_kb.style.background = "#3498db"
    btn_paket_std.style.background = "#3498db"
    btn_jbreksi.style.background = "#95d5ff"
    btn_cmahika.style.background = "#3498db"

    balkondes.style.display = "none"
    rmahika_kb.style.display = "none"
    paket_std.style.display = "none"
    jbreksi.style.display = "block"
    cmahika.style.display = "none"

    wa_balkondes.style.display = "none"
    wa_rmahika_kb.style.display = "none"
    wa_paket_std_r.style.display = "none"
    wa_paket_std_p.style.display = "none"
    wa_jbreksi1.style.display = "block"
    wa_jbreksi2.style.display = "block"
    wa_cmahika.style.display = "none" 

    btn_pesan1.style.display = "none"
    btn_pesan2.style.display = "none"
    btn_pesan3.style.display = "none"
    btn_pesan4.style.display = "block"
    btn_pesan5.style.display = "none"
}

btn_cmahika.onclick = function () {
    btn_balkondes.style.background = "#3498db"
    btn_rmahika_kb.style.background = "#3498db"
    btn_paket_std.style.background = "#3498db"
    btn_jbreksi.style.background = "#3498db"
    btn_cmahika.style.background = "#95d5ff"

    balkondes.style.display = "none"
    rmahika_kb.style.display = "none"
    paket_std.style.display = "none"
    jbreksi.style.display = "none"
    cmahika.style.display = "block"

    wa_balkondes.style.display = "none"
    wa_rmahika_kb.style.display = "none"
    wa_paket_std_r.style.display = "none"
    wa_paket_std_p.style.display = "none"
    wa_jbreksi1.style.display = "none"
    wa_jbreksi2.style.display = "none"
    wa_cmahika.style.display = "block" 
    
    btn_pesan1.style.display = "none"
    btn_pesan2.style.display = "none"
    btn_pesan3.style.display = "none"
    btn_pesan4.style.display = "none"
    btn_pesan5.style.display = "block"
}