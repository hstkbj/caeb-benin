import { deleteData, getData, getSingleData, postData, putData } from "../plugins/api";

export async function AllCategory(){
    return await getData('/categories').then(res=>{
        return res.data.data
    })
}

export async function singleCategory(id) {
    return await getSingleData('/category/'+id).then(res=>{
        return res.data.data
    })
}

export async function postCategory(data) {
    return await postData('/addcategory',data).then(res=>{
        return res.data.data
    })
}

export async function updateCategory(id,data) {
    return await putData('/udatecategory/'+id,data).then(res=>{
        return res.data.data
    })
}

export async function deleteCategory(id) {
    return await deleteData('/deletecategory/'+id).then(res=>{
        return res.data
    })
}