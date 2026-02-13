import { deleteData, getData, getSingleData, postData, putData } from "../plugins/api";

export async function AllUsers(){
    return await getData('/alluser').then(res=>{
        return res.data.data
    })
}

export async function singleUser(id) {
    return await getSingleData('/showuser/'+id).then(res=>{
        return res.data.data
    })
}

export async function postUser(data) {
    return await postData('/adduser',data).then(res=>{
        return res.data.data
    })
}

export async function updateUser(id,data) {
    return await putData('/updateuser/'+id,data).then(res=>{
        return res.data.data
    })
}

export async function deleteUser(id) {
    return await deleteData('/deleteuser/'+id).then(res=>{
        return res.data.data
    })
}