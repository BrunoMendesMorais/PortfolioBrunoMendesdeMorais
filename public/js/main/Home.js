const verMaisSobreMim = document.getElementById("verMaisSobreMim");
const maisSobreMim = document.getElementById("maisSobreMim")

verMaisSobreMim.addEventListener("click", mostraMaisSobreMim);

function mostraMaisSobreMim() {
    if (maisSobreMim.textContent.trim() == ''){
         maisSobreMim.innerHTML = `
    <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ex dolor ab totam porro minima fugit. Suscipit non explicabo eum cumque nam ut cum, illo eaque quos assumenda doloremque aut et?
            </p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, quae iusto laudantium ipsam perferendis corrupti accusantium qui nostrum animi quasi laboriosam nihil harum fugit temporibus cumque quos exercitationem rerum saepe.
                Quas inventore consequuntur eveniet necessitatibus. Quas quos ipsum illum facilis maxime accusantium magni? Blanditiis laudantium fugit corporis. Quis repudiandae facilis perferendis tempora, minus reiciendis eum, esse voluptate dolore voluptas velit.</p>
    `;
    verMaisSobreMim.innerHTML = 'VER MENOS';
    }
    else{
           maisSobreMim.innerHTML = '';
    verMaisSobreMim.innerHTML = 'VER MAIS';
    }
   
}